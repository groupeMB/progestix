<?php

namespace Pharmacie\InventaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PharmacieInventaireBundle:Default:index.html.twig');
    }
}
