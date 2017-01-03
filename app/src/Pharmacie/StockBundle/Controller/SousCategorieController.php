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
        return $this->render('PharmacieStockBundle:Categorie:index.html.twig');
    }

    public function ajouterAction(Request $request)
    {
        $session = $this->get('session');
        $session->getFlashBag()->add('confirm','ajout effectuer avec succes');

        $categorie = new Categorie();

        $form = $this->get('form.factory')->create(new CategorieType(),$categorie);

        if ($form->handleRequest($request)->isValid()) 
        {
            if ($form->get('Valider')->isClicked())  
            {

                $em = $this->getDoctrine()->getManager();
                $em->persist($form->getData());
                $em->flush();

                return $this->redirect($this->generateUrl('gestion_stock_categorie_lister'));
            }

        }


        return $this->render('PharmacieStockBundle:Categorie:ajouter.html.twig',array('form' => $form->createView()));
    }



    public function listerAction()
    {
        
        $categories=$this->getDoctrine()
            ->getManager()
            ->getRepository("PharmacieStockBundle:Categorie")
            ->findAll();

        if(!$categories){       
                        throw $this->createNotFoundException( 'Aucune Categorie touvée ');
                      } 
        return $this->render('PharmacieStockBundle:Categorie:lister.html.twig',array('categories'=>$categories));
    }

    
    public function afficherAction($id){
        $em = $this->getDoctrine()->getManager();
        $categorie = $em->getRepository('PharmacieStockBundle:Categorie')->findOneBy( array('id' => $id));
        return $this->render('PharmacieStockBundle:Categorie:afficher.html.twig', array("categorie"  => $categorie ));
    }


    public function supprimerAction(Request $request,$id)
    {
        
        $em = $this->getDoctrine()
            ->getManager()
        ;   
        //recuperer  la categorie corresponde a l'id
        $categorie= $em->getRepository("PharmacieStockBundle:Categorie")->findOneBy(array('id' => $id));
        
        if(!$categorie)
            {
                throw $this->createNotFoundException( 'Aucune Categorie touvée pour l id'.$id);
            }   
        $em->remove($categorie);
        $em->flush();   

        //recuperer tous les categorie pour les afficher
        $categories = $em->getRepository("PharmacieStockBundle:Categorie")->findAll();
        if(!$categories){       
                        throw $this->createNotFoundException( 'Aucune Categorie touvée ');
                       }    
        return $this->render('PharmacieStockBundle:Categorie:lister.html.twig',array('categories'=>$categories));
    }       


public function modifierAction(Request $request,$id)
    {

        $em = $this->getDoctrine()
            ->getManager()
            ->getRepository("PharmacieStockBundle:Categorie")
        ;
        
        $categorie = $em->find($id);    

        if(!$categorie)
        {
            throw $this->createNotFoundException("Aucun Objet Trouvé");
            
        }

        $form = $this->get('form.factory')->create(new CategorieType(),$categorie);

        if ($form->handleRequest($request)->isValid()) 
        {
            if ($form->get('Valider')->isClicked())  
            {

                $em = $this->getDoctrine()->getManager();
                $em->persist($form->getData());
                $em->flush();
                return $this->redirect($this->generateUrl('gestion_stock_categorie_lister'));
            }

        }

        return $this->render('PharmacieStockBundle:Categorie:modifier.html.twig',array(
                    'form' => $form->createView(), 'categorie' => $categorie    
            ));

    }   

}
