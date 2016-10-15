<?php
/**
 * Created by PhpStorm.
 * User: abdoul
 * Date: 30/09/2016
 * Time: 17:44
 */

namespace Pharmacie\VenteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pharmacie\VenteBundle\Entity\achete;
use Pharmacie\StockBundle\Entity\Produit;
use Pharmacie\VenteBundle\Entity\produitVendu;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;

class AcheteController extends Controller
{

    public function ajouterAction(Request $request)
    {
        $session=$this->getRequest()->getSession();
        if (!$session->has('panier'))
            $article=0;
        else
            $article=count($session->get('panier'));

        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('PharmacieStockBundle:Produit')->findAll();
        return $this->render('PharmacieVenteBundle:Achete:achete.html.twig', array('produits' => $produit,'article' => $article));
    }


    public function panierajouterAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('PharmacieStockBundle:Produit')->findOneBy( array('id' => $id));
        $stock = $em->getRepository('PharmacieStockBundle:Stock')->findOneBy( array('produit' => $produit));
        if ($stock->getQuantite()>0) {
            $session = $this->getRequest()->getSession();
            if (!$session->has('panier'))
                $session->set('panier', array());
            $panier = $session->get('panier');
            if (array_key_exists($id, $panier)) {
                if ($this->getRequest()->query->get('quantite') != null)
                    $panier[$id] = $this->getRequest()->query->get('quantite');
            } else {
                if ($this->getRequest()->query->get('quantite') != null)
                    $panier[$id] = $this->getRequest()->query->get('quantite');
                else
                    $panier[$id] = 1;
            }

            $session->set('panier', $panier);
            $this->get('session')->getFlashBag()->add('succes', 'Produit ajouté avec succés');
            return $this->redirect($this->generateUrl('gestionstock_ajouter_achete'));
          }
          else
              return $this->render('PharmacieVenteBundle:Achete:produit.html.twig', array('produits' => $produit ,'stock'=>$stock));

    }

    public function clientajouterAction()
    {

        $sess = $this->getRequest()->getSession();
        if ($sess->has('client'))
            $sess->remove('client');
        $sess->set('client', array());
        $client=$sess->get('client');
        $client[1] =$this->getRequest()->query->get('clients') ;
         $sess->set('client', $client);
        
        return $this->redirect($this->generateUrl('gestionstock_panier_achete'));

    }


    public function clientAction(){
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('PharmacieVenteBundle:client')->findAll();
        return $this->render('PharmacieVenteBundle:Achete:client.html.twig', array('client' => $client));

    }

    public function panierAction()
    {
        $session=$this->getRequest()->getSession();
        if (!$session->has('panier'))
            $session->set('panier',array());
        if(!$session->has('client'))
            $session->set('client',array());

        $em = $this->getDoctrine()->getManager();
        if (count($session->get('panier'))!=0)
            $produit = $em->getRepository('PharmacieStockBundle:Produit')->findArray(array_keys($session->get('panier')));
        else
            $produit = $em->getRepository('PharmacieStockBundle:Produit')->find(-3);

        if (count($session->get('client'))!=0){
            $id=$session->get('client');
            $client = $em->getRepository('PharmacieVenteBundle:client')->find($id[1]);
        }
        else
            $client = $em->getRepository('PharmacieVenteBundle:client')->find(-3);
        return $this->render('PharmacieVenteBundle:Achete:panier.html.twig', array('produits' => $produit ,'client'=>$client,'panier'=>$session->get('panier'),'sclient'=>$session->get('client')));
    }

    public function validerpanierAction()
    {
        $session=$this->getRequest()->getSession();
        if (!$session->has('panier'))
            $session->set('panier',array());
        $panier=$session->get('panier');
        $client=$session->get('client');

        $em = $this->getDoctrine()->getManager();

        $produit = $em->getRepository('PharmacieStockBundle:Produit')->findArray(array_keys($session->get('panier')));

        $montant=0;
        foreach ($produit as $p){
            $montant=$montant+ $p->getPrixUnitaire()*$panier[$p->getId()];
        }


        foreach ($produit as $p){
            $generate=$this->container->get('security.secure_random');
            $generate= new achete();
            $generate->setDate(new \DateTime());
            $em->persist($generate);


            $clients=$em->getRepository('PharmacieVenteBundle:client')->find($client[1]);
             $generate->setIdclient($clients);
             $em->persist($generate);

             $produitss=$em->getRepository('PharmacieStockBundle:Produit')->find($p->getId());
             $generate->setIdproduit($produitss);
             $em->persist($generate);

            $stock = $em->getRepository('PharmacieStockBundle:Stock')->findOneBy( array('produit' => $produitss));
            $stock->setQuantite($stock->getQuantite()-$panier[$p->getId()]);
            $generate->setMontant($montant);
            $em->persist($generate);

        }
        $em->flush();
        foreach ($produit as $p){

            $produitvendu=$this->container->get('security.secure_random');
            $produitvendu= new produitVendu();
            $produitvendu->setIdproduit($produitss);
            $em->persist( $produitvendu);
            $produitvendu->setQuantite($panier[$p->getId()]);
            $em->persist( $produitvendu);

        }
        $em->flush();
        $session->clear();
        return $this->redirect($this->generateUrl('gestionstock_panier_achete'));
    }

    public function validerAction()
    {
        $session=$this->getRequest()->getSession();
        if (!$session->has('panier'))
            $session->set('panier',array());
        $panier=$session->get('panier');

        $em = $this->getDoctrine()->getManager();

        $produit = $em->getRepository('PharmacieStockBundle:Produit')->findArray(array_keys($session->get('panier')));

        $montant=0;
        foreach ($produit as $p){
            $montant=$montant+ $p->getPrixUnitaire()*$panier[$p->getId()];
        }


        foreach ($produit as $p){

            $produitvendu=$this->container->get('security.secure_random');
            $produitvendu= new produitVendu();
            $produitss=$em->getRepository('PharmacieStockBundle:Produit')->find($p->getId());
            $produitvendu->setIdproduit($produitss);
            $em->persist( $produitvendu);
            $produitvendu->setQuantite($panier[$p->getId()]);
            $em->persist( $produitvendu);

            $stock = $em->getRepository('PharmacieStockBundle:Stock')->findOneBy( array('produit' => $produitss));
            $stock->setQuantite($stock->getQuantite()-$panier[$p->getId()]);
        }
        $em->flush();
        $session->clear();
        return $this->redirect($this->generateUrl('gestionstock_panier_achete'));
    }


    public function supprimerAction($id){
        $session=$this->getRequest()->getSession();
        $panier=$session->get('panier');
        if (array_key_exists($id,$panier)) {
            unset($panier[$id]);
            $session->set('panier',$panier);
            $this->get('session')->getFlashBag()->add('succes','Produit supprimer avec succés');
        }

        return $this->redirect($this->generateUrl('gestionstock_panier_achete'));
    }





    public function listerAction()
    {
        $em = $this->getDoctrine()->getManager();
        $achat = $em->getRepository('PharmacieVenteBundle:achete')->findAll();
        return $this->render('PharmacieStockBundle:Produit:lister.html.twig', array('achat' => $achat));
    }

    public function afficheAction($id)
    {


        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('PharmacieStockBundle:Produit')->findOneBy( array('id' => $id));
        $stock = $em->getRepository('PharmacieStockBundle:Stock')->findOneBy( array('produit' => $produit));
        return $this->render('PharmacieVenteBundle:Achete:produit.html.twig', array('produits' => $produit ,'stock'=>$stock));
    }



}
