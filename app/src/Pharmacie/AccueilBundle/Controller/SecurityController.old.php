<?php

namespace Pharmacie\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;



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
            //Exemple d'alerte
            //1-On recupere la quantite et le seuilMin dans stock
            $em = $this->getDoctrine()->getEntityManager();
            $Stock = $em->getRepository('Pharmacie\StockBundle\Entity\Stock')->findAll();

            $chaine1 = "";
            $chaine2 = "";
            $nbProduit1 = 0;
            $nbProduit2 = 0;
            foreach ($Stock as $key => $value) {

                //On l'avertit si le produit est en cour de rupture
               if ($value->getQuantite()-$value->getSeuilMin()>0 && $value->getQuantite()-$value->getSeuilMin()<=10) {
                    $chaine1 = $chaine1.$value->getLibelle().", ";
                    $nbProduit1 +=1; 

                    //Pour alerte visuelle sur la page
                   /* $this->get('ras_flash_alert.alert_reporter')->addWarning("Le Produit ".$value->getProduit()." est en cour de rupture, veuillez le renouveler!");*/
               }

               //Le produit a atteint son seuil minimal
                else if ($value->getQuantite()-$value->getSeuilMin()<=0) {
                    $chaine2 = $chaine2.$value->getLibelle().", ";
                    $nbProduit2 +=1;
                     // $this->get('ras_flash_alert.alert_reporter')->addError("Le Produit ".$value->getProduit()." a atteint le seuil minimal, veuillez le renouveler!");
                }
            
            }

           if ($nbProduit1==1) {

               $msg1 = ' curl -X POST -H "Authorization: Bearer hkUaRnjcZSXPc3auo8jrShLNY5Tg" -H "Content-Type: application/json" -d \'{"outboundSMSMessageRequest":{"address":"tel:+221774209690","senderAddress":"tel:+221772780284","senderName":"PROGESTIX","outboundSMSTextMessage":{"message":"Le Produit '.$chaine1.' est en cour de rupture, veuillez le renouveler!"}}}\' "https://api.orange.com/smsmessaging/v1/outbound/tel:+221772780284/requests" ';

                $process1 = new Process($msg1);
                $process1->run();

                if (!$process1->isSuccessful()) {
                    throw new ProcessFailedException($process1);
                }

           }
          if ($nbProduit1>1) {
                $msg1 = ' curl -X POST -H "Authorization: Bearer hkUaRnjcZSXPc3auo8jrShLNY5Tg" -H "Content-Type: application/json" -d \'{"outboundSMSMessageRequest":{"address":"tel:+221774209690","senderAddress":"tel:+221772780284","senderName":"PROGESTIX","outboundSMSTextMessage":{"message":"Les Produits: '.$chaine1.' sont en cour de rupture, veuillez les renouveler!"}}}\' "https://api.orange.com/smsmessaging/v1/outbound/tel:+221772780284/requests" ';

                $process11 = new Process($msg1);
                $process11->run();

                if (!$process11->isSuccessful()) {
                    throw new ProcessFailedException($process11);
                }
            }

             if ($nbProduit2==1) {

               $msg2 = ' curl -X POST -H "Authorization: Bearer hkUaRnjcZSXPc3auo8jrShLNY5Tg" -H "Content-Type: application/json" -d \'{"outboundSMSMessageRequest":{"address":"tel:+221774209690","senderAddress":"tel:+221772780284","senderName":"PROGESTIX","outboundSMSTextMessage":{"message":"Le Produit '.$chaine2.' a atteint le seuil minimal, veuillez le renouveler!"}}}\' "https://api.orange.com/smsmessaging/v1/outbound/tel:+221772780284/requests" ';


                $process2 = new Process($msg2);
                $process2->run();

                if (!$process2->isSuccessful()) {
                    throw new ProcessFailedException($process2);
                }

           }
            if ($nbProduit2>1) {
                $msg2 = ' curl -X POST -H "Authorization: Bearer hkUaRnjcZSXPc3auo8jrShLNY5Tg" -H "Content-Type: application/json" -d \'{"outboundSMSMessageRequest":{"address":"tel:+221774209690","senderAddress":"tel:+221772780284","senderName":"PROGESTIX","outboundSMSTextMessage":{"message":"Les Produits: '.$chaine2.' ont atteint le seuil minimal, veuillez les renouveler!"}}}\' "https://api.orange.com/smsmessaging/v1/outbound/tel:+221772780284/requests" ';

                $process22 = new Process($msg2);
                $process22->run();

                if (!$process22->isSuccessful()) {
                    throw new ProcessFailedException($process22);
                }
            }

            return $this->render('PharmacieAccueilBundle:Security:presentation.html.twig');
        }
        else
        {
            return $this->redirect($this->generateUrl('pharmacie_accueil_login'));   
        }
    }
}