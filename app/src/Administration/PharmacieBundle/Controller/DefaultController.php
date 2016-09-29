<?php

namespace Administration\PharmacieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdministrationPharmacieBundle:Default:index.html.twig');
    }
}
