<?php

namespace Pharmacie\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PharmacieAccueilBundle:Default:index.html.twig');
    }
}
