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
         if ($form->handleRequest($request)->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entite_produit);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Produit bien enregistré.');
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

    public function listerAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('GestionStockBundle:Produit')->findAll();
        return $this->render('GestionStockBundle:Produit:lister.html.twig', array('produits' => $produit));
    }




}
