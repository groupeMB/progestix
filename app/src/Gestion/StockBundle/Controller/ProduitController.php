<?php

namespace Gestion\StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestion\StockBundle\Entity\Produit;
use Gestion\StockBundle\Form\ProduitType as ProduitType;
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
            if ($form->get('Ajouter')->isClicked())  
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

        return $this->render('GestionStockBundle:Produit:ajouter.html.twig',array('formulaire' => $form->createView()));
    }

    //afficher produit
    public function afficherAction($code)

    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('GestionStockBundle:Produit')->findOneBy( array('codebarre' => $code));
        return $this->render('GestionStockBundle:Produit:afficher.html.twig', array("code"  => $produit ));
    }

    //lister produit
    public function listerAction()
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('GestionStockBundle:Produit')->findAll();
        return $this->render('GestionStockBundle:Produit:lister.html.twig', array('produits' => $produit));
    }
     
    //modifier produit
    public function modifierAction(Request $request, $codebarre)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('GestionStockBundle:Produit')->findOneBy(array('codebarre' => $codebarre));
        $produits = $em->getRepository('GestionStockBundle:Produit')->findAll();

         // On vérifie que le produit avc un $codebarre existe bien, sinon, erreur 404.
        if(!$produit)
        {
           throw $this->createNotFoundException('Produit[code barre='.$codebarre.'] inexistant');
        }
      
        $form = $this->get('form.factory')->create(new ProduitType, $produit);
               
        if ($form->handleRequest($request)->isValid()) 
        {

            if ($form->get('Ajouter')->isClicked())  
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

        return $this->render('GestionStockBundle:Produit:modifier.html.twig', array(
                'codebarre' => $codebarre,
                'formulaire' => $form->createView(), 
                'code' => $produit));
    }

    //supprimer produit
    public function supprimerAction(Request $request, $codebarre)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('GestionStockBundle:Produit')->findOneBy(array('codebarre' => $codebarre));
        $produits = $em->getRepository('GestionStockBundle:Produit')->findAll();

         // On vérifie que le produit avc un $codebarre existe bien, sinon, erreur 404.
        if(!$produit)
        {
            throw $this->createNotFoundException('Produit[code barre='.$codebarre.'] inexistant');
        }
      
       $form = $this->get('form.factory')->create(new ProduitType, $produit);
               
        if ($form->handleRequest($request)->isValid()) 
        {
            if ($form->get('Ajouter')->isClicked())  
            {
             $em->remove($produit);
             $em->flush();

                 return $this->redirect($this->generateUrl('gestion_stock_lister_produit',array('produits' => $produits)));
            
            }

             if ($form->get('Annuler')->isClicked())  
            {
                 return $this->redirect($this->generateUrl('gestion_stock_lister_produit',array('produits' => $produits)));
            }

        }

        return $this->render('GestionStockBundle:Produit:supprimer.html.twig', array(
            'codebarre' => $codebarre,
            'formulaire'=> $form->createView(),
            'code' => $produit));
    }


    // public function getAllCategorie(){
    //     $em = $this->getDoctrine()->getManager();
    //     $categs = $em->getRepository('GestionStockBundle:Categorie')->findAll();

    //     $res = array();
    //     foreach ($categs as $key => $categ) {
    //         $cc = $categ->getContent();
    //         $res[$cc['id']] = $cc['libelle'];
    //     }

    //     return $res;
    // }

}