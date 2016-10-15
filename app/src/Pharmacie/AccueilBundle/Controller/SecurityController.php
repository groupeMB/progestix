<?php

namespace Pharmacie\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class SecurityController extends Controller
{

    /**********************************************************************/
    /* Fonction executée pour l'authentification sur la plateforme OMS    */
    /*                                                                   */
    /********************************************************************/

    public function loginAction(Request $request)
    {
        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('pharmacie_accueil_presentation');
        }
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('PharmacieAccueilBundle:Security:login.html.twig',array('last_username' => $lastUsername,'error' => $error,));
    }

     public function presentationAction(Request $request)
    {
        if($this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY'))
        {
            return $this->render('PharmacieAccueilBundle:Security:presentation.html.twig');
        }
        else
        {
            return $this->redirect($this->generateUrl('pharmacie_accueil_login'));   
        }
    }
}