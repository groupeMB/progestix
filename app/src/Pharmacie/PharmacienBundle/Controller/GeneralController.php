<?php

namespace Pharmacie\PharmacienBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GeneralController extends Controller
{

    /**
     * @Route("/accueil/pharmacien")
     */
    public function accueilPharmacienAction()
    {
        return $this->render('PharmaciePharmacienBundle:Pharmacien:accueil.html.twig');
    }
}
