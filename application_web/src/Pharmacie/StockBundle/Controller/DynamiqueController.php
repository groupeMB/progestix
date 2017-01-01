<?php

namespace Pharmacie\StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pharmacie\StockBundle\Entity\Produit;
use Pharmacie\StockBundle\Form\ProduitType as ProduitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;

class DynamiqueController extends Controller
{
    // ajouter un champ à l'entité Produit
    public function produitAjouter(Request $request){

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
}
