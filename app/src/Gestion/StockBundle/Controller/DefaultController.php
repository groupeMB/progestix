<?php

namespace Gestion\StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GestionStockBundle:Default:index.html.twig');
    }
}
