<?php

namespace Gestion\StockBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestion\StockBundle\Entity\Stock;
use Gestion\StockBundle\Form\StockType as StockType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;

class StockController extends Controller
{
    public function indexAction()
    {
        return $this->render('GestionStockBundle:Default:index.html.twig');
    }

    public function ajouterAction(Request $request)
    {
		$entite_stock = new Stock();

        $em = $this->getDoctrine()->getManager();

        $form_stock = new StockType($this);

        $form = $this->get('form.factory')->create($form_stock, $entite_stock);

        if ($form->handleRequest($request)->isValid()) 
        {
            if ($form->get('Ajouter')->isClicked())  
            {

                //selectionner le produit
               // $entite_stock->setProduit($em->getRepository('GestionStockBundle:Produit')->find($entite_stock->produits)); //Ce qui reste: il faut verifier que le ce stock existe, sinon le creer

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

        return $this->render('GestionStockBundle:Stock:ajouter.html.twig',array('formulaire' => $form->createView()));
    }

    public function listerAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $stocks = $em->getRepository('GestionStockBundle:Stock')->findAll();

        $res = array();
        foreach ($stocks as $key => $stock) {
            $res[$key] = $stock->getContent();
        }


        return $this->render('GestionStockBundle:Stock:lister.html.twig', array('stocks' => $res));
    }

     public function afficherAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $stock = $em->getRepository('GestionStockBundle:Stock')->findOneby(array ('id' => $id));
        return $this->render('GestionStockBundle:Stock:afficher.html.twig', array("stock"  => $stock));
    }


    public function getAllProduit(){
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('GestionStockBundle:Produit')->findAll();

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
        $stock = $em->getRepository('GestionStockBundle:Stock')->findOneBy(array('id' => $id));
        $stocks = $em->getRepository('GestionStockBundle:Stock')->findAll();

    
        if(!$stock)
        {
           throw $this->createNotFoundException('Produit inexistant');
        }
      
        $form = $this->get('form.factory')->create(new StockType, $stock);
               
        if ($form->handleRequest($request)->isValid()) 
        {

            if ($form->get('Ajouter')->isClicked())  
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

        return $this->render('GestionStockBundle:Stock:modifier.html.twig', array(
                'id' => $id,
                'formulaire' => $form->createView(), 
                'code' => $stock));
    }


        //supprimer produit
    public function supprimerAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $stock = $em->getRepository('GestionStockBundle:Stock')->findOneBy(array('id' => $id));
        $stocks = $em->getRepository('GestionStockBundle:Stock')->findAll();

         // On vérifie que le produit avc un $id existe bien, sinon, erreur 404.
        if(!$stock)
        {
            throw $this->createNotFoundException('Stock inexistant');
        }
      
       $form = $this->get('form.factory')->create(new StockType, $stock);
               
        if ($form->handleRequest($request)->isValid()) 
        {
            if ($form->get('Ajouter')->isClicked())  
            {
             $em->remove($stock);
             $em->flush();

                 return $this->redirect($this->generateUrl('gestion_stockage_lister_stock',array('stocks' => $stocks)));
            
            }

             if ($form->get('Annuler')->isClicked())  
            {
                 return $this->redirect($this->generateUrl('gestion_stockage_lister_stock',array('stocks' => $stocks)));
            }

        }

        return $this->render('GestionStockBundle:Stock:supprimer.html.twig', array(
            'id' => $id,
            'formulaire'=> $form->createView(),
            'code' => $stock));
    }


}