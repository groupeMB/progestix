<?php
namespace Pharmacie\InventaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Response;

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
}
