<?php
/**
 * Created by PhpStorm.
 * User: bng
 * Date: 2/29/16
 * Time: 7:57 PM
 */
namespace Gestion\InventaireBundle\Controller;

use Gestion\InventaireBundle\Entity\Inventaire;
use Gestion\InventaireBundle\Form\InventaireType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;


class InventaireController extends Controller
{
    public function indexAction()
    {
        $inventaire = new Inventaire();
        $form = $this->createForm(new InventaireType(), $inventaire);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                return $this->inventairePeremption($inventaire);
                //return $this->redirect($this->generateUrl('gestion_inventaire_lister'));
            }
        }
        return $this->render('GestionInventaireBundle:Inventaire:index.html.twig', array('form' => $form->createView()));
        //return $this->render('GestionInventaireBundle:modele:annuel.html.twig');
    }
    public function listerInventaireAction(){
        $em = $this->getDoctrine()->getManager();
        $types = $em->getRepository('GestionInventaireBundle:Inventaire')->findAll();
        return $this->render('GestionInventaireBundle:Inventaire:lister.html.twig', array('types' => $types));
    }
    public function pdf($twig, $var)
    {

        $filename = sprintf('test-%s.pdf', date('Y-m-d_h:s'));
        $this->get('knp_snappy.pdf')->generateFromHtml(
            $this->renderView($twig, $var),
            $this->get('kernel')->getRootDir(). "/web/downloads/pdf/". $filename
        );
        //$ĉontent = ['Content-Type' => 'application/pdf'];

        return $filename;
        //return $this->redirect($this->generateUrl('gestion_inventaire_lister'));
    }
    public function inventairePeremption(Inventaire $inventaire){
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('GestionStockBundle:Produit')->findAll();//findBy(array('dateperemption' => array($inventaire->getDateDebut(), $inventaire->getDateFin())));
        if ($produits){}
        $file = $this->pdf('GestionInventaireBundle:modele:peremption.html.twig', array('produits' => $produits));   //$em = $this->getDoctrine()->getManager();
        $inventaire->setRapport($file);
        $em->persist($inventaire);
        $em->flush();
        return $this->render('GestionInventaireBundle:Rapports:rapportPeremption.html.twig', array('produits' => $produits, "filename"=> $file));
        //return $this->render('GestionInventaireBundle:Rapport:rapportPeremption.html.twig', array('produits' => $produits, "filename"=> $file));
        //return $this->redirect($this->generateUrl('gestion_inventaire_lister'));
    }
    public function downloadAction($filename){
        $request = $this->get('request');
        $path = $this->get('kernel')->getRootDir(). "/web/downloads/pdf/";
        $content = file_get_contents($path.$filename);
        $response = new Response();
        //set headers
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment;filename="'.$filename);
        $response->setContent($content);
        return $response;
    }
    public function testAction()
    {
        // ask the service for a excel object
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();

        $phpExcelObject->getProperties()->setCreator("liuggio")
            ->setLastModifiedBy("Giulio De Donato")
            ->setTitle("Office 2005 XLSX Test Document")
            ->setSubject("Office 2005 XLSX Test Document")
            ->setDescription("Test document for Office 2005 XLSX, generated using PHP classes.")
            ->setKeywords("office 2005 openxml php")
            ->setCategory("Test result file");
        $phpExcelObject->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Hello')
            ->setCellValue('B2', 'world!');
        $phpExcelObject->getActiveSheet()->setTitle('Simple');
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $phpExcelObject->setActiveSheetIndex(0);

        // create the writer
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel2007');
        // create the response
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        // adding headers
        $dispositionHeader = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'PhpExcelFileSample.xlsx'
        );
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;
    }

}

