<?php

namespace Pharmacie\StockBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pharmacie\StockBundle\Entity\Stock;
use Pharmacie\StockBundle\Form\StockType as StockType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;

class StockController extends Controller
{
    public function indexAction()
    {
        return $this->render('PharmacieStockBundle:Stock:index.html.twig');
    }

    public function ajouterAction(Request $request)
    {
        $entite_stock = new Stock();

        $em = $this->getDoctrine()->getManager();

        $form_stock = new StockType($this);

        $form = $this->get('form.factory')->create($form_stock, $entite_stock);

        if ($form->handleRequest($request)->isValid()) 
        {
            if ($form->get('Valider')->isClicked())  
            {

                //selectionner le produit
               // $entite_stock->setProduit($em->getRepository('PharmacieStockBundle:Produit')->find($entite_stock->produits)); //Ce qui reste: il faut verifier que le ce stock existe, sinon le creer

                $em->persist($entite_stock);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Ajout réussi.');
                return $this->redirect($this->generateUrl('gestion_stockage_lister_stock'));
            }

        }

        if ($form->get('Annuler')->isClicked())  
            {
                 return $this->redirect($this->generateUrl('gestion_stockage_lister_stock'));
            }

   

        return $this->render('PharmacieStockBundle:Stock:ajouter.html.twig',array('formulaire' => $form->createView()));
    }

    public function listerAction(){
        $em = $this->getDoctrine()->getManager();
        $stocks = $em->getRepository('PharmacieStockBundle:Stock')->findAll();
        return $this->render('PharmacieStockBundle:Stock:lister.html.twig', array('stocks' => $stocks));
    }

     public function afficherAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $stock = $em->getRepository('PharmacieStockBundle:Stock')->findOneby(array ('id' => $id));
        return $this->render('PharmacieStockBundle:Stock:afficher.html.twig', array("stock"  => $stock));
    }


    public function getAllProduit(){
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('PharmacieStockBundle:Produit')->findAll();

        $res = array();
        foreach ($produits as $key => $produit) {
            $cc = $produit->getContent();
            $res[$cc['id']] = $cc['libelle'];
        }

        print_r($res);

        return $res;
    }


     //modifier stock
    public function modifierAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $stock = $em->getRepository('PharmacieStockBundle:Stock')->findOneBy(array('id' => $id));
        $stocks = $em->getRepository('PharmacieStockBundle:Stock')->findAll();

    
        if(!$stock)
        {
           throw $this->createNotFoundException('Produit inexistant');
        }
      
        $form = $this->get('form.factory')->create(new StockType, $stock);
               
        if ($form->handleRequest($request)->isValid()) 
        {

            if ($form->get('Valider')->isClicked())  
            {
              $em->persist($stock);
              $em->flush();
              return $this->redirect($this->generateUrl('gestion_stockage_afficher_stock', array('id' => $id)));
            
            }

             if ($form->get('Annuler')->isClicked())  
            {
                 return $this->redirect($this->generateUrl('gestion_stockage_lister_stock',array('stocks' => $stocks)));
            }          
            
        }

        return $this->render('PharmacieStockBundle:Stock:modifier.html.twig', array(
                'id' => $id,
                'formulaire' => $form->createView(), 
                'code' => $stock));
    }


        //supprimer produit
    public function supprimerAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $stock = $em->getRepository('PharmacieStockBundle:Stock')->findOneBy(array('id' => $id));
        $stocks = $em->getRepository('PharmacieStockBundle:Stock')->findAll();

         // On vérifie que le produit avc un $id existe bien, sinon, erreur 404.
        if(!$stock)
        {
            throw $this->createNotFoundException('Stock inexistant');
        }
      
        $em->remove($stock);
        $em->flush();

        return $this->redirect($this->generateUrl('gestion_stockage_lister_stock',array('stocks' => $stocks)));
      
          
    }

    /* 
    * statistiques associés au stock
    */

    public function statistiquesAction(){



        $resultats = array();

        //tous les stocks
        $stocks = $this->getDoctrine()->getManager()
                ->getRepository("PharmacieStockBundle:Stock")
                ->findAll();


        foreach ($stocks as $stock_key => $stock){

            //le nombre de produits 
           $nb_total_produits = 0;

           //l'estiamtion en termes de coût
           $estimation_cout = 0;

            $nb_total_produits += $stock->getQuantite();

            //les produits dans le stock
            $produits = $this->getDoctrine()->getManager()
                        ->getRepository("PharmacieStockBundle:Produit")
                        ->findByLibelle($stock->getId());

            foreach ($produits as $produit_key => $produit){
                //l'estimation en termes de coût
                $estimation_cout +=  $produit->getPrixunitaire();
            }

            $resultats[$stock_key] = array(
                'produit' => $stock->getLibelle(),
                'nb_produits' => $nb_total_produits,
                'estimation_cout' => $estimation_cout,
                'id' => $stock->getId()
            );
            
        }
        
        return $this->render('PharmacieStockBundle:Stock:statistiques.html.twig', array('stocks' => $resultats));

    }




}