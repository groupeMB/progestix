<?php 

namespace Gestion\StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestion\StockBundle\Entity\Categorie;
use Gestion\StockBundle\Form\CategorieType as CategorieType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;
use Gestion\StockBundle\Entity\Produit; 

class CategorieController extends Controller
{



 public function ajouterAction(Request $request)
 	{
		$session = $this->get('session');
		$session->getFlashBag()->add('confirm','ajout effectuer avec succes');

		$categorie = new Categorie();

		$form = $this->get('form.factory')->create(new CategorieType(),$categorie);

		if ($form->handleRequest($request)->isValid()) 
        {
            if ($form->get('Ajouter')->isClicked())  
            {

                $em = $this->getDoctrine()->getManager();
                $em->persist($form->getData());
                $em->flush();
                return $this->redirect($this->generateUrl('gestion_stock_categorie_lister'));
            }

        }


		return $this->render('GestionStockBundle:Categorie:ajouter.html.twig',array('form' => $form->createView()));
 	}



 public function listerAction()
 	{

    	$categories=$this->getDoctrine()
    		->getManager()
    		->getRepository("GestionStockBundle:Categorie")
    		->findAll();

    	if(!$categories){	 	
		 				throw $this->createNotFoundException( 'Aucune Categorie touvée ');
    				  }	
    	return $this->render('GestionStockBundle:Categorie:lister.html.twig',array('categories'=>$categories));
 	}




 public function supprimerAction(Request $request,$id)
 	{
 		
 		$em = $this->getDoctrine()
 			->getManager()
 		;	
 		//recuperer  la categorie corresponde a l'id
 		$categorie= $em->getRepository("GestionStockBundle:Categorie")->findOneBy(array('id' => $id));
 		
 		if(!$categorie)
 			{
 				throw $this->createNotFoundException( 'Aucune Categorie touvée pour l id'.$id);
 			}	
 		$em->remove($categorie);
 		$em->flush();	

 		//recuperer tous les categorie pour les afficher
 		$categories = $em->getRepository("GestionStockBundle:Categorie")->findAll();
 		if(!$categories){	 	
		 				throw $this->createNotFoundException( 'Aucune Categorie touvée ');
    				   }	
    	return $this->render('GestionStockBundle:Categorie:lister.html.twig',array('categories'=>$categories));
 	}	 	


public function modifierAction(Request $request,$id)
 	{

 		$em = $this->getDoctrine()
 			->getManager()
 			->getRepository("GestionStockBundle:Categorie")
 		;
 		
 		$categorie = $em->find($id);	

 		if(!$categorie)
 		{
 			throw $this->createNotFoundException("Aucun Objet Trouver");
 			
 		}

		$form = $this->get('form.factory')->create(new CategorieType(),$categorie);

		if ($form->handleRequest($request)->isValid()) 
        {
            if ($form->get('Ajouter')->isClicked())  
            {

                $em = $this->getDoctrine()->getManager();
                $em->persist($form->getData());
                $em->flush();
                return $this->redirect($this->generateUrl('gestion_stock_categorie_lister'));
            }

        }

		return $this->render('GestionStockBundle:Categorie:modifier.html.twig',array(
					'form' => $form->createView()		
			));

 	}	

 	/**
 	*Recuperer la categorie corresponde a un produit
 	*/
 	public function produitCategorieAction(Request $request,$id)
 		{
 			$produit = $this->getDoctrine()
 					 ->getManager()
	 				 ->getRepository("GestionStockBundle:Produit")
	 				 ->find($id)
 				 ;	
			var_dump($produit);
			die();
          // $produit = $this->getDoctrine()
          //         ->getManager()
          //         ->getRepository("GestionStockBundle:Produit")
          //         ->findAll()
          //     ;  

 		 //$categorieName = $produit->getCategorie()->getName();
            // $ProduitCategorie=array();

            // if ($produit->getCategorie_id()==$id) 
            // {
            //     $ProduitCategorie[] = '$produit->getLibelle()';
            // }

 		 return $this->render('GestionStockBundle:Categorie:categorieProduit.html.twig',array(
					'categorieName' => $categorieName //ProduitCategorie//		
			));	 


 		} 


 	/**
 	*Recuperer les produit corresponde a une categorie
 	*/
 	public function categorieProduitAction(Request $request,$id)
 		{
 			$categorie= $this->getDoctrine() 
	 				 ->getManager()
	 				 ->getRepository("GestionStockBundle:Categorie")
	 				 ->find($id)
 				 ;		


 		 //retourne un tableau de produit 		 
 		 $tabproduit = $categorie->getProduit();

 		 return $this->render('GestionStockBundle:Categorie:tabproduit.html.twig',array(
					'tabproduit' => $tabproduit		
			));	 


 		}		




}