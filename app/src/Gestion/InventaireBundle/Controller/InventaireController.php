<?php
/**
 * Created by PhpStorm.
 * User: bng
 * Date: 2/29/16
 * Time: 7:57 PM
 */
namespace Gestion\InventaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;
//use Symfony\Component\BrowserKit\Response;

class InventaireController extends Controller
{
    public function indexAction()
    {
        return $this->render('GestionInventaireBundle:Inventaire:index.html.twig');
    }
    public function pdfAction()
    {
        $filename = sprintf('test-%s.pdf', date('Y-m-d_h:s'));
        $output = $this->get('knp_snappy.pdf')->generateFromHtml(
            $this->renderView('GestionInventaireBundle:Inventaire:index.html.twig',array()
            ),
            $filename
        );
        $ĉontent = ['Content-Type' => 'application/pdf'];

        return $this->render('GestionInventaireBundle:Inventaire:index.html.twig');
    }

    
}

