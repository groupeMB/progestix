<?php
namespace Pharmacie\InventaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Pharmacie\InventaireBundle\Entity\Inventaire;
use Pharmacie\InventaireBundle\Form\Type\InventaireType;
class InventaireController extends Controller
{
	public function indexAction()
	
	{		
		return $this->render('PharmacieInventaireBundle:Inventaire:index.html.twig');
	}
 
	
	public function pdfAction()
	{
		$html = $this->renderView('PharmacieInventaireBundle:Inventaire:index.html.twig');
		$filename = sprintf('test-%s.pdf', date('Y-m-d'));
	
		return new Response(
				$this->get('knp_snappy.pdf')->getOutputFromHtml($html),
				200,
				[
				'Content-Type'        => 'application/pdf',
				'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
				]
		);
	}


	public function faireInventaireAction(Request $request){
        $entite_inventaire = new Inventaire();
        $form_inventaire = new InventaireType();

        $form = $this->get('form.factory')->create($form_inventaire, $entite_inventaire);

        if ($form->handleRequest($request)->isValid()) 
        {
            if ($form->get('Valider')->isClicked())  
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entite_inventaire);
                $em->flush();
                return $this->redirect($this->generateUrl('lister_inventaire'));
            }

        }

        if ($form->get('Annuler')->isClicked())  
        {
                 return $this->redirect($this->generateUrl('lister_inventaire'));
        }

        return $this->render('PharmacieInventaireBundle:Inventaire:faireinventaire.html.twig',array('formulaire' => $form->createView()));
    }
}
