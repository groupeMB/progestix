<?php 

namespace Pharmacie\StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pharmacie\StockBundle\Entity\Categorie;
use Pharmacie\StockBundle\Form\CategorieType as CategorieType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;
use Pharmacie\StockBundle\Entity\Produit; 

class CategorieController extends Controller
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

    /**
    *Recuperer la categorie corresponde a un produit
    */
    public function produitCategorieAction(Request $request,$id)
        {
            $produit = $this->getDoctrine()
                     ->getManager()
                     ->getRepository("PharmacieStockBundle:Produit")
                     ->findBy(array('categorie' => $id ))
                 ;  
            
            $categorie = $this->getDoctrine()
                     ->getManager()
                     ->getRepository("PharmacieStockBundle:Categorie")
                     ->findOneBy(array('id' => $id ))
                 ;

         return $this->render('PharmacieStockBundle:Categorie:categorieProduit.html.twig',array(
                    'categorie' => $categorie,  'produit' => $produit       
            ));  


        } 


    /**
    *Recuperer les produit corresponde a une categorie
    */
    public function categorieProduitAction(Request $request,$id)
        {
            $categorie= $this->getDoctrine() 
                     ->getManager()
                     ->getRepository("PharmacieStockBundle:Categorie")
                     ->find($id)
                 ;      


         //retourne un tableau de produit        
         $tabproduit = $categorie->getProduit();

         return $this->render('PharmacieStockBundle:Categorie:tabproduit.html.twig',array(
                    'tabproduit' => $tabproduit     
            ));  


        }       


    /* 
    * statistiques associés à la catégorie: nombre total de produit, estimation fin, evolution produit, ...
    */

    public function statistiquesAction(){

        //selectionner tous les categories
        $categories = $this->getDoctrine()->getManager()
                        ->getRepository("PharmacieStockBundle:Categorie")
                        ->findAll();

        $resultats = array();

        
        foreach ($categories as $key => $categorie) {

            //le nombre de produits 
           $nb_total_produits = 0;

           //l'estiamtion en termes de coût
           $estimation_cout = 0;


            //tous les stocks dans cette catégorie
            $stocks = $this->getDoctrine()->getManager()
                    ->getRepository("PharmacieStockBundle:Stock")
                    ->findByCategorie($categorie->getId());


            foreach ($stocks as $stock_key => $stock){

                $nb_total_produits += $stock->getQuantite();

                //les produits dans le stock
                $produits = $this->getDoctrine()->getManager()
                            ->getRepository("PharmacieStockBundle:Produit")
                            ->findByLibelle($stock->getId());

                foreach ($produits as $produit_key => $produit){
                    //l'estimation en termes de coût
                    $estimation_cout +=  $produit->getPrixunitaire();
                }

                
            }
            


           $resultats[$key] = array(
                'categorie' => $categorie->getLibelle(),
                'nb_produits' => $nb_total_produits,
                'estimation_cout' => $estimation_cout,
                'id' => $categorie->getId()
            );

        }
        



        return $this->render('PharmacieStockBundle:Categorie:statistiques.html.twig', array('categories' => $resultats));

    }



}