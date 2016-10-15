<?php

namespace Pharmacie\VenteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PharmacieVenteBundle:Default:index.html.twig', array('name' => $name));
    }
}
