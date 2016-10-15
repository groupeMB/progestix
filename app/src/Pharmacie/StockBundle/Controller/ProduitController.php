<?php

namespace Pharmacie\StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pharmacie\StockBundle\Entity\Produit;
use Pharmacie\StockBundle\Form\ProduitType as ProduitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;



class ProduitController extends Controller
{
 	

    //Ajouter produit
    public function ajouterAction(Request $request)

    {
        $entite_produit = new Produit();
        $form_produit = new ProduitType();
        $form = $this->get('form.factory')->create($form_produit, $entite_produit);

        if ($form->handleRequest($request)->isValid()) 
        {
            if ($form->get('Valider')->isClicked())  
            {

                $em = $this->getDoctrine()->getManager();
                $em->persist($entite_produit);
                $em->flush();
                return $this->redirect($this->generateUrl('gestion_stock_lister_produit'));
            }

        }

        if ($form->get('Annuler')->isClicked())  
        {
                 return $this->redirect($this->generateUrl('gestion_stock_lister_produit'));
        }

        return $this->render('PharmacieStockBundle:Produit:ajouter.html.twig',array('formulaire' => $form->createView()));
    }

    //afficher produit
    public function afficherAction($code)

    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('PharmacieStockBundle:Produit')->findOneBy( array('codebarre' => $code));
        return $this->render('PharmacieStockBundle:Produit:afficher.html.twig', array("code"  => $produit ));
    }

    //lister produit
    public function listerAction()
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('PharmacieStockBundle:Produit')->findAll();
        return $this->render('PharmacieStockBundle:Produit:lister.html.twig', array('produits' => $produit));
    }
     
    //modifier produit
    public function modifierAction(Request $request, $codebarre)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('PharmacieStockBundle:Produit')->findOneBy(array('codebarre' => $codebarre));
        $produits = $em->getRepository('PharmacieStockBundle:Produit')->findAll();

         // On vérifie que le produit avc un $codebarre existe bien, sinon, erreur 404.
        if(!$produit)
        {
           throw $this->createNotFoundException('Produit[code barre='.$codebarre.'] inexistant');
        }
      
        $form = $this->get('form.factory')->create(new ProduitType, $produit);
               
        if ($form->handleRequest($request)->isValid()) 
        {

            if ($form->get('Valider')->isClicked())  
            {
              $em->persist($produit);
              $em->flush();
              return $this->redirect($this->generateUrl('gestion_stock_afficher_produit', array('code' => $codebarre)));
            
            }

             if ($form->get('Annuler')->isClicked())  
            {
                 return $this->redirect($this->generateUrl('gestion_stock_lister_produit',array('produits' => $produits)));
            }          
            
        }

        return $this->render('PharmacieStockBundle:Produit:modifier.html.twig', array(
                'codebarre' => $codebarre,
                'formulaire' => $form->createView(), 
                'code' => $produit));
    }

    //supprimer produit
    public function supprimerAction(Request $request, $codebarre)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('PharmacieStockBundle:Produit')->findOneBy(array('codebarre' => $codebarre));
        $produits = $em->getRepository('PharmacieStockBundle:Produit')->findAll();

         // On vérifie que le produit avc un $codebarre existe bien, sinon, erreur 404.
        if(!$produit)
        {
            throw $this->createNotFoundException('Produit[code barre='.$codebarre.'] inexistant');
        }
        $em->remove($produit);
        $em->flush();
        return $this->redirect($this->generateUrl('gestion_stock_lister_produit',array('produits' => $produits)));
    }

        /* 
    * statistiques associés aux produits
    */

    public function statistiquesAction(){



        $resultats = array();

        //selectionner tous les produits
        $produits = $this->getDoctrine()->getManager()
                    ->getRepository("PharmacieStockBundle:Produit")
                    ->findAll();

        //le nombre de produits 
       $nb_total_produits = 0;

       //l'estiamtion en termes de coût
       $estimation_cout = 0;

        foreach ($produits as $key => $produit){

            //le nombre de produits dans le stock
            $stock = $this->getDoctrine()->getManager()
                    ->getRepository("PharmacieStockBundle:Stock")
                    ->findOneByProduit($produit->getId());

            $nb_total_produits += $stock->getQuantite();

            //l'estimation en termes de coût
            $estimation_cout += $stock->getQuantite() * $produit->getPrixunitaire();

            $resultats[$key] = array(
                'reference' => $produit->getReference(),
                'libelle' => $produit->getLibelle(),
                'nb_produits' => $nb_total_produits,
                'estimation_cout' => $estimation_cout,
                'codebarre' => $produit->getCodebarre()
            );
        }
        

        return $this->render('PharmacieStockBundle:Produit:statistiques.html.twig', array('produits' => $resultats));

    }


    // public function getAllCategorie(){
    //     $em = $this->getDoctrine()->getManager();
    //     $categs = $em->getRepository('PharmacieStockBundle:Categorie')->findAll();

    //     $res = array();
    //     foreach ($categs as $key => $categ) {
    //         $cc = $categ->getContent();
    //         $res[$cc['id']] = $cc['libelle'];
    //     }

    //     return $res;
    // }

}