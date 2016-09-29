<?php

namespace Gestion\InventaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GestionInventaireBundle:Default:index.html.twig');
    }
}
