<?php

namespace Pharmacie\StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pharmacie\StockBundle\Entity\SousCategorie;
use Pharmacie\StockBundle\Form\SousCategorieType as SousCategorieType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;


class SousCategorieController extends Controller
{
	 public function indexAction()
    {
        return $this->render('PharmacieStockBundle:SousCategorie:index.html.twig');
    }

    /* 
    * ajout de sous categorie 
    */
    public function ajouterAction(Request $request)
    {
        $session = $this->get('session');
        $session->getFlashBag()->add('confirm','ajout effectuer avec succes');

        $souscategorie = new SousCategorie();

        $form = $this->get('form.factory')->create(new SousCategorieType(),$souscategorie);

        if ($form->handleRequest($request)->isValid()) 
        {
            if ($form->get('Valider')->isClicked())  
            {

                $em = $this->getDoctrine()->getManager();
                $em->persist($form->getData());
                $em->flush();

                return $this->redirect($this->generateUrl('gestion_stock_souscategorie_lister'));
            }

        }


        return $this->render('PharmacieStockBundle:SousCategorie:ajouter.html.twig',array('form' => $form->createView()));
    }


    /*
    *   lister tous les sous categories
    */
    public function listerAction()
    {
        
        $souscategories=$this->getDoctrine()
            ->getManager()
            ->getRepository("PharmacieStockBundle:SousCategorie")
            ->findAll();

        if(!$souscategories){       
                        throw $this->createNotFoundException( 'Aucune Sous catégorie touvée ');
                      } 
        return $this->render('PharmacieStockBundle:SousCategorie:lister.html.twig',array('souscategories'=>$souscategories));
    }

    /*
    *   afficher une sous catégorie
    */    
    public function afficherAction($id){
        $em = $this->getDoctrine()->getManager();
        $souscategorie = $em->getRepository('PharmacieStockBundle:SousCategorie')->findOneBy( array('id' => $id));
        return $this->render('PharmacieStockBundle:SousCategorie:afficher.html.twig', array("souscategorie"  => $souscategorie ));
    }


    public function supprimerAction(Request $request,$id)
    {
        
        $em = $this->getDoctrine()
            ->getManager()
        ;   
        //recuperer  la categorie corresponde a l'id
        $souscategorie= $em->getRepository("PharmacieStockBundle:SousCategorie")->findOneBy(array('id' => $id));
        
        if(!$souscategorie)
            {
                throw $this->createNotFoundException( 'Aucune sous catégorie trouvée pour l id'.$id);
            }   
        $em->remove($souscategorie);
        $em->flush();   

        //recuperer tous les categorie pour les afficher
        $souscategories = $em->getRepository("PharmacieStockBundle:SousCategorie")->findAll();

        if(!$souscategories){       
            throw $this->createNotFoundException( 'Aucune sous catégorie trouvée ');
        }

        return $this->render('PharmacieStockBundle:SousCategorie:lister.html.twig',array('souscategories'=>$souscategories));
    }       


    /*
    * Modification de la sous categorie
    */
    public function modifierAction(Request $request,$id){

        $em = $this->getDoctrine()
            ->getManager()
            ->getRepository("PharmacieStockBundle:SousCategorie")
        ;
        
        $souscategorie = $em->find($id);    

        if(!$souscategorie)
        {
            throw $this->createNotFoundException("Aucun Objet Trouvé");
            
        }

        $form = $this->get('form.factory')->create(new SousCategorieType(),$souscategorie);

        if ($form->handleRequest($request)->isValid()) 
        {
            if ($form->get('Valider')->isClicked())  
            {

                $em = $this->getDoctrine()->getManager();
                $em->persist($form->getData());
                $em->flush();
                return $this->redirect($this->generateUrl('gestion_stock_souscategorie_lister'));
            }

        }

        return $this->render('PharmacieStockBundle:SousCategorie:modifier.html.twig',array(
                    'form' => $form->createView(), 'souscategorie' => $souscategorie    
            ));

    }   

}
