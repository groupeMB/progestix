<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/8/16
 * Time: 3:30 PM
 */

namespace Gestion\InventaireBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Gestion\InventaireBundle\Entity\TypeInventaire;
use Gestion\InventaireBundle\Form\TypeInventaireType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TypeInventaireController extends Controller{
    public function ajouterTypeInventaireAction()
    {
        $typeInventaire = new TypeInventaire();
        $form = $this->createForm(new TypeInventaireType(), $typeInventaire);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($typeInventaire);
                $em->flush();
                return $this->redirect($this->generateUrl('gestion_inventaire_lister_type'));
            }
        }
        return $this->render('GestionInventaireBundle:Inventaire:ajouterType.html.twig',
            array(
                'form' => $form->createView(),
            ));
    }
    public function modifierTypeInventaireAction(Request $request ,$id){
        $em = $this->getDoctrine()->getManager();
        $type = $em->getRepository('GestionInventaireBundle:TypeInventaire')->find($id);
        $types = $em->getRepository('GestionInventaireBundle:TypeInventaire')->findAll();
        
        if(!$type)
        {
            throw $this->createNotFoundException('type inexistant');
        }

        $form = $this->get('form.factory')->create(new TypeInventaireType(), $type);

        if ($form->handleRequest($request)->isValid())
        {
            $em->persist($type);
            $em->flush();
            return $this->redirect($this->generateUrl('gestion_inventaire_lister_type'));

        }
    }
    public function listerTypeInventaireAction(){
        $em = $this->getDoctrine()->getManager();
        $types = $em->getRepository('GestionInventaireBundle:TypeInventaire')->findAll();
        return $this->render('GestionInventaireBundle:Inventaire:listerType.html.twig', array('types' => $types));
    }
    public function supprimerTypeInventaireAction(Request $request, $id){

        $em = $this->getDoctrine()->getManager();
        $type = $em->getRepository('GestionInventaireBundle:Inventaire')->findOneBy(array('id' => $id));
        var_dump($type);
        if(!$type){
            throw $this->createNotFoundException( 'Aucun type d\'inventaire touvé pour l\'id '.$id);
        }
        $em->remove($type);
        $em->flush();
        $types = $em->getRepository('GestionInventaireBundle:TypeInventaire')->findAll();
        return $this->render('GestionInventaireBundle:Inventaire:listerType.html.twig', array('types' => $types));
    }


}