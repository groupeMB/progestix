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
use Pharmacie\VenteBundle\Entity\Vente;
use Pharmacie\VenteBundle\Entity\client;                            //thm
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;      

class AcheteController extends Controller
{

    public function infoClientAction(Request $request)
    {
  /*      if($request->isXmlHttpRequest()) {
            $idcli = $request->request->get('client');
            $em = $this->getDoctrine()->getManager();
            $client = $em->getRepository('PharmacieStockBundle:Stock')->findOneBy(array('id' => $idcli));
            return new Response(json_encode($client));
        }
        return new Response("Erreur: ce n''est pas une requête Ajax",400);
*/

//        $request = $this->container->get('request');
//        $idcli = $request->query->get('data');
        $idcli = $request->request->get('id');
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('PharmacieVenteBundle:client')->findOneBy(array('id' => $idcli));
//        $response = array('Id' => $client->Id, 'prenom' => $client->prenom, 'nom' => $client->nom, 'cin' => $client->cin, 'mail' => $client->mail);
        $response = array(
            'id' => $client->getId(),
            'nom' => $client->getNom(),
            'prenom' => $client->getPrenom(),
            'cin' => $client->getCin(),
            'tel' => $client->getTel(),
            'mail' => $client->getMail()
            );
        return new Response(json_encode($response));



    }



    public function ajouterAction(Request $request)
    {
        $session=$this->getRequest()->getSession();
        if (!$session->has('panier'))
            $article=0;
        else
            $article=count($session->get('panier'));

        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('PharmacieStockBundle:Stock')->findAll();
        return $this->render('PharmacieVenteBundle:Achete:achete.html.twig', array('produits' => $produit,'article' => $article));
    }


    public function panierajouterAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('PharmacieStockBundle:Produit')->findOneBy( array('id' => $id));
        $stock = $em->getRepository('PharmacieStockBundle:Stock')->findOneBy( array('id' => $produit->getLibelle()));

            $session = $this->getRequest()->getSession();
            if (!$session->has('panier'))
                $session->set('panier', array());
            $panier = $session->get('panier');
            $quantite = $this->getRequest()->query->get('quantite');
            if (array_key_exists($id, $panier)) 
            {
                if ($this->getRequest()->query->get('quantite') != null)
                {
                    $panier[$id]+= $this->getRequest()->query->get('quantite');
                    $stock->setQuantite($stock->getQuantite()-$quantite);
                }
            } 
            else 
            {
                if ($this->getRequest()->query->get('quantite') != null)
                {
                    $panier[$id] = $this->getRequest()->query->get('quantite');
                    $stock->setQuantite($stock->getQuantite()-$quantite);
                }
                else
                    $panier[$id] = 1;
            }
            $em->flush();
            $session->set('panier', $panier);
            $this->get('session')->getFlashBag()->add('succes', 'Produit ajouté avec succés');
            return $this->redirect($this->generateUrl('gestionstock_ajouter_achete'));

    }







    // public function modifierAction($id)
    // {
    //     $em = $this->getDoctrine()->getManager();
    //     $produit = $em->getRepository('PharmacieStockBundle:Produit')->findOneBy( array('id' => $id));
    //     $stock = $em->getRepository('PharmacieStockBundle:Stock')->findOneBy( array('produit' => $produit));

    //     $session = $this->getRequest()->getSession();
    //     if (!$session->has('panier'))
    //         $session->set('panier', array());
    //     $panier = $session->get('panier');
    //     $quantite = $this->getRequest()->query->get('quantite');
    //     if (array_key_exists($id, $panier))
    //     {
    //         if ($this->getRequest()->query->get('quantite') != null)
    //         {
    //             $stock->setQuantite($stock->getQuantite()+$panier[$produit->getID()]);
    //             $panier[$id] = $this->getRequest()->query->get('quantite');
    //             $stock->setQuantite($stock->getQuantite()-$quantite);
    //         }
    //     }
    //     else
    //     {
    //         if ($this->getRequest()->query->get('quantite') != null)
    //         {
    //             $panier[$id] = $this->getRequest()->query->get('quantite');
    //             $stock->setQuantite($stock->getQuantite()-$quantite);
    //         }
    //         else
    //             $panier[$id] = 1;
    //     }
    //     $em->flush();
    //     $session->set('panier', $panier);
    //     $this->get('session')->getFlashBag()->add('succes', 'Produit modifié avec succés');
    //     return $this->redirect($this->generateUrl('gestionstock_panier_achete'));

    // }


    public function modifierAction(Request $request)
    {
        $id = $request->request->get('id');
        $quantite = $request->request->get('quantite');
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('PharmacieStockBundle:Produit')->findOneBy( array('id' => $id));
        $stock = $em->getRepository('PharmacieStockBundle:Stock')->findOneBy( array('id' => $produit->getStock()));

        $session = $this->getRequest()->getSession();
        if (!$session->has('panier'))
            $session->set('panier', array());
        $panier = $session->get('panier');
        if (array_key_exists($id, $panier))
        {   
            $rep = false;
            if ($quantite - $panier[$produit->getID()] <= $stock->getQuantite())
            {
                $stock->setQuantite($stock->getQuantite() + $panier[$produit->getID()]);
                $panier[$id] = $quantite;
                $stock->setQuantite($stock->getQuantite() - $quantite);
                $rep = true;
            }
        }
        $em->flush();
        $session->set('panier', $panier);
        $this->get('session')->getFlashBag()->add('succes', 'Produit modifié avec succés');

        return $this->redirect($this->generateUrl('gestionstock_panier_achete'));

    }

    // public function clientajouterAction()
    // {
    //     $sess = $this->getRequest()->getSession();
    //     if ($sess->has('client'))
    //         $sess->remove('client');
    //     $sess->set('client', array());
    //     $client = $sess->get('client');
    //     $client[1] = $this->getRequest()->query->get('clients') ;
    //     $sess->set('client', $client);
    //     return $this->redirect($this->generateUrl('gestionstock_panier_achete'));
    // }

    public function clientajouterAction(Request $request)
    {
        $idclient = $request->request->get('idclient');
        $em = $this->getDoctrine()->getManager();

        $sess = $this->getRequest()->getSession();
        if ($sess->has('client'))
            $sess->remove('client');
        $sess->set('client', array());
        $client[1] = $idclient;
        $sess->set('client', $client);
        return $this->redirect($this->generateUrl('gestionstock_panier_achete'));
    }




    //THM
    public function ajouterclient()
    {
        $sess = $this->getRequest()->getSession();
        if ($sess->has('client'))
            $sess->remove('client');
        $sess->set('client', array());
        $client = $sess->get('client');
        $client[1] = $this->getRequest()->query->get('clients') ;
        $sess->set('client', $client);
        return $this->redirect($this->generateUrl('gestionstock_panier_achete'));
    }


    public function clientAction(){
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('PharmacieVenteBundle:client')->findAll();
        return $this->render('PharmacieVenteBundle:Achete:client.html.twig', array('client' => $client));

    }

    // public function panierAction()
    // {
    //     $session=$this->getRequest()->getSession();
    //     if (!$session->has('panier'))
    //         $session->set('panier',array());
    //     if(!$session->has('client'))
    //         $session->set('client',array());

    //     $em = $this->getDoctrine()->getManager();
    //     if (count($session->get('panier'))!=0)
    //         $produit = $em->getRepository('PharmacieStockBundle:Produit')->findArray(array_keys($session->get('panier')));
    //     else
    //         $produit = $em->getRepository('PharmacieStockBundle:Produit')->find(-3);

    //     if (count($session->get('client'))!=0){
    //         $id=$session->get('client');
    //         $client = $em->getRepository('PharmacieVenteBundle:client')->find($id[1]);
    //     }
    //     else
    //         $client = $em->getRepository('PharmacieVenteBundle:client')->find(-3);

    //     $em = $this->getDoctrine()->getManager();
    //     $listeClients = $em->getRepository('PharmacieVenteBundle:client')->findAll();
    //     return $this->render('PharmacieVenteBundle:Achete:panier.html.twig', array(
    //         'produits' => $produit ,
    //         'client' => $client,
    //         'panier' => $session->get('panier'),
    //         'sclient' => $session->get('client'),
    //         'listeclients' => $listeClients
    //         )
    //     );
    // }

    public function panierAction()
    {
        $session=$this->getRequest()->getSession();
        if (!$session->has('panier')) {
            $session->set('panier',array());
            $article = 0;
        }
        else
            $article = count($session->get('panier'));

        if(!$session->has('client'))
            $session->set('client',array());

        $em = $this->getDoctrine()->getManager();
        //$allproducts = $em->getRepository('PharmacieStockBundle:Stock')->findAll();
        $req = "SELECT produit.id AS id, stock.libelle AS libelle, produit.prixUnitaire, stock.quantite, COUNT(*) AS decompte FROM produit,stock WHERE stock.quantite>0 AND produit.stock = stock.id GROUP BY stock.libelle, produit.prixUnitaire;";
        $statement = $em->getConnection()->prepare($req);
        $statement->execute();
        $allproducts = $statement->fetchAll();


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

        $em = $this->getDoctrine()->getManager();
        $listeClients = $em->getRepository('PharmacieVenteBundle:client')->findAll();
        return $this->render('PharmacieVenteBundle:Achete:achete.html.twig', array(
            'listeproduits' => $produit ,
            'client' => $client,
            'panier' => $session->get('panier'),
            'sclient' => $session->get('client'),
            'listeclients' => $listeClients,


            'produits' => $allproducts,
            'article' => $article
            )
        );
    }


    public function validerpanierAction()
    {
        $session=$this->getRequest()->getSession();
        if (!$session->has('panier'))
            $session->set('panier',array());
        $panier = $session->get('panier');
        $client = $session->get('client');

        $em = $this->getDoctrine()->getManager();

        $produit = $em->getRepository('PharmacieStockBundle:Produit')->findArray(array_keys($session->get('panier')));

        $montant=0;
        foreach ($produit as $p){
            $montant=$montant+ $p->getPrixUnitaire()*$panier[$p->getId()];
        }


        foreach ($produit as $p){
            $generate = $this->container->get('security.secure_random');
            $generate = new achete();
            $generate->setDate(new \DateTime());
            $em->persist($generate);


            $clients = $em->getRepository('PharmacieVenteBundle:client')->find($client[1]);
            $generate->setIdclient($clients);
            $em->persist($generate);

            $produitss=$em->getRepository('PharmacieStockBundle:Produit')->find($p->getId());
            $generate->setIdproduit($produitss);
            $em->persist($generate);

            $stock = $em->getRepository('PharmacieStockBundle:Stock')->findOneBy( array('id' => $produitss->getLibelle()));
            $stock->setQuantite($stock->getQuantite()-$panier[$p->getId()]);
            $generate->setMontant($montant);
            $em->persist($generate);

        }
        $em->flush();
        $utilisateur= $this->container->get('security.context')->getToken()->getUser();
        $vente= new Vente();
        $vente->setMontant($montant);
        $vente->setDateVente(new \DateTime());
        $vente->setAgent($utilisateur);
        $em->persist($vente);
        $em->flush();
        $idvente = $em->getRepository('PharmacieVenteBundle:Vente')->getLastID();
        foreach ($produit as $p){

            $produitvendu=$this->container->get('security.secure_random');
            $produitvendu= new produitVendu();
            $produitvendu->setNomproduit($p->getLibelle());
            $produitvendu->setPrixunitaire($p->getPrixUnitaire());
            $produitvendu->setIdVente($idvente);
            $em->persist( $produitvendu);
            $produitvendu->setQuantite($panier[$p->getId()]);
            $em->persist( $produitvendu);
            $em->flush();
        }
       
        $session->clear();
        return $this->redirect($this->generateUrl('gestionstock_panier_achete'));
    }




    public function validerAction()
    {
        // Ajout du client
        $this->ajouterclient();


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
        $utilisateur= $this->container->get('security.context')->getToken()->getUser();
        $vente= new Vente();
        $vente->setMontant($montant);
        $vente->setDateVente(new \DateTime());
        $vente->setAgent($utilisateur);
        $em->persist($vente);
        $em->flush();
        $idvente = $em->getRepository('PharmacieVenteBundle:Vente')->getLastID();
        foreach ($produit as $p){

            $produitvendu=$this->container->get('security.secure_random');
            $produitvendu= new produitVendu();
            $produitvendu->setNomproduit($p->getLibelle());
            $produitvendu->setPrixunitaire($p->getPrixUnitaire());
            $produitvendu->setIdVente($idvente);
            $produitvendu->setQuantite($panier[$p->getId()]);
            $em->persist( $produitvendu);
            $em->flush();
        }
        
        $session->clear();
        return $this->redirect($this->generateUrl('gestionstock_panier_achete'));
    }






    public function supprimerAction($id){

        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('PharmacieStockBundle:Produit')->findOneBy( array('id' => $id));
        $stock = $em->getRepository('PharmacieStockBundle:Stock')->findOneBy( array('id' => $produit->getLibelle()));
        $session=$this->getRequest()->getSession();
        $panier=$session->get('panier');
        $stock->setQuantite($stock->getQuantite()+$panier[$produit->getID()]);
        if (array_key_exists($id,$panier)) {
            unset($panier[$id]);
            $session->set('panier',$panier);
            $panier[$id] = $this->getRequest()->query->get('quantite');
            $this->get('session')->getFlashBag()->add('succes','Produit supprimé avec succés');
        }
        $em->flush();
        if(!$session->get('panier')) {
            if ($session->has('client'))
                $session->remove('client');

        }
        return $this->redirect($this->generateUrl('gestionstock_panier_achete'));
    }



    public function listerAction()
    {
        $em = $this->getDoctrine()->getManager();
        $achat = $em->getRepository('PharmacieVenteBundle:achete')->findAll();
        return $this->render('PharmacieStockBundle:Produit:lister.html.twig', array('achat' => $achat));
    }


    // public function afficheAction($id)
    // {

    //     $em = $this->getDoctrine()->getManager();
    //     $produit = $em->getRepository('PharmacieStockBundle:Produit')->findOneBy( array('id' => $id));
    //     $stock = $em->getRepository('PharmacieStockBundle:Stock')->findOneBy( array('produit' => $produit));
    //     return $this->render('PharmacieVenteBundle:Achete:produit.html.twig', array('produits' => $produit ,'stock'=>$stock));
    // }

     public function afficheAction(Request $request)
    {
        $id = $request->request->get('id');
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('PharmacieStockBundle:Produit')->findOneBy( array('id' => $id));
        $stock = $em->getRepository('PharmacieStockBundle:Stock')->findOneBy( array('produit' => $produit));
        return $this->render('PharmacieVenteBundle:Achete:produit.html.twig', array('produits' => $produit ,'stock'=>$stock));
    }

    public function venteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('PharmacieVenteBundle:produitVendu')->findBy( array('idvente' => $id));
        $vente = $em->getRepository('PharmacieVenteBundle:Vente')->findOneBy( array('id' => $id));
        return $this->render('PharmacieVenteBundle:Achete:listerVente.html.twig', array("code"  => $produit, "vente"  => $vente));
    }
    public function listerventeAction()
    {
        $session=$this->getRequest()->getSession();
        if (!$session->has('panier'))
            $article=0;
        else
            $article=count($session->get('panier'));

        $em = $this->getDoctrine()->getManager();
        $achat = $em->getRepository('PharmacieVenteBundle:Vente')->findAll();
        $achat = array_reverse($achat);
        return $this->render('PharmacieVenteBundle:Achete:lister.html.twig', array('achat' => $achat,'article'=>$article));
    }

}
