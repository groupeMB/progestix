<?php

namespace Pharmacie\InventaireBundle\Controller;

use Doctrine\ORM\EntityNotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Pharmacie\InventaireBundle\Form\Type\ModeleInventaireType;
use Pharmacie\InventaireBundle\Form\Handler\ModeleInventaireHandler;
use Pharmacie\InventaireBundle\Entity\ModeleInventaire;


class ModeleInventaireController extends Controller
{

    public function listerModeleInventaireAction()

    {    $inventaire=$this->getDoctrine()
            ->getManager()
            ->getRepository("PharmacieInventaireBundle:Inventaire")
            ->findAll();

        if(!$inventaire)
            throw $this->createNotFoundException( 'Aucun inventaire n a ete fait ');
        return $this->render('PharmacieInventaireBundle:Inventaire:listerinventaire.html.twig',array('inventaire'=>$inventaire));

        //return $this->render('PharmacieInventaireBundle:Inventaire:listerinventaire.html.twig');
        
    }
    
    public function creerModeleInventaireAction(Request $req)
    {

    	 $formHandler = new ModeleInventaireHandler($this->createForm(new ModeleInventaireType(), new ModeleInventaire()), $req);
    	 if($formHandler->process($this->getDoctrine()))
    	 {
    	 	return $this->redirect($this->generateUrl('faire_inventaire'));
    	 }
    	 		
    	 return $this->render('PharmacieInventaireBundle:Modele:creerModele.html.twig', array('form' => $formHandler->getForm()->createView()));
    }
    
    public function modifierModeleInventaireAction($id, Request $req)
    {
        $em = $this->getDoctrine()->getManager();
    	 $modele =  $em->getRepository('PharmacieInventaireBundle:ModeleInventaire')->find($id);

    	 if(!$modele)
            throw new EntityNotFoundException();

         $formHandler = new ModeleInventaireHandler($this->get('form.factory')->create(new ModeleInventaireType(), $modele), $req);

        if ($formHandler->process($this->getDoctrine()))
        {
            return $this->redirect($this->generateUrl('faire_inventaire'));
        }

    	 return $this->render('PharmacieInventaireBundle:Modele:modifierModele.html.twig', array('form' => $formHandler->getForm()->createView() ));
    }
    
    public function supprimerModeleInventaireAction($id, Request $req){

        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('PharmacieInventaireBundle:ModeleInventaire')->findOneBy(array('id'=> $id));
        if(!$modele)
            throw new EntityNotFoundException();
        $em->remove($modele);
        return $this->redirect($this->generateUrl('faire_inventaire'));
    }
    
}
