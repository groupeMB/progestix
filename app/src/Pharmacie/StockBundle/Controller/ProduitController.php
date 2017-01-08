<?php

namespace Pharmacie\StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pharmacie\StockBundle\Entity\Produit;
use Pharmacie\StockBundle\Form\ProduitType as ProduitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Ob\HighchartsBundle\Highcharts\Highchart; //Pour les graphes

use SaadTazi\GChartBundle\DataTable; //Pour Graphe utilisant Gcharts
use SaadTazi\GChartBundle\Chart\PieChart;//Pour Graphe utilisant Gcharts



class ProduitController extends Controller
{
    

    //Ajouter produit
    public function ajouterAction(Request $request){
        $entite_produit = new Produit();
        $form_produit = new ProduitType();

        $form = $this->get('form.factory')->create($form_produit, $entite_produit);

        if ($form->handleRequest($request)->isValid()) 
        {
            if ($form->get('Valider')->isClicked())  
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entite_produit);
                $em->flush();

                //verifier si le stock existe
                //$entite_produit = $em->getRepository('PharmacieStockBundle:Stock')->findOneBy($entite_produit->getContent());
                //$stock = $em->getRepository('PharmacieStockBundle:Stock')->findOneBy($entite_produit->get);

                //incrementer le stock
                $stock = $em->getRepository("PharmacieStockBundle:Stock")
                        ->find($entite_produit->getLibelle());
                $stock->setQuantite($stock->getQuantite()+1);
                $em->persist($stock);
                $em->flush();

                return $this->redirect($this->generateUrl('gestion_stock_lister_produit'));
            }

        }

        if ($form->get('Annuler')->isClicked())  
        {
                 return $this->redirect($this->generateUrl('gestion_stock_lister_produit'));
        }

        return $this->render('PharmacieStockBundle:Produit:ajouter.html.twig',array('formulaire' => $form->createView()));
    }

    //afficher produit
    public function afficherAction($code)

    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('PharmacieStockBundle:Produit')->findOneBy( array('codebarre' => $code));
        return $this->render('PharmacieStockBundle:Produit:afficher.html.twig', array("code"  => $produit ));
    }

    //lister produit
    public function listerAction()
    {

        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('PharmacieStockBundle:Produit')->findAll();
        //print_r($produits[0]->getDateperemption());
        return $this->render('PharmacieStockBundle:Produit:lister.html.twig', array(
            'produits' => $produits,
            ));
    }
     
    //modifier produit
    public function modifierAction(Request $request, $codebarre)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('PharmacieStockBundle:Produit')->findOneBy(array('codebarre' => $codebarre));
        $produits = $em->getRepository('PharmacieStockBundle:Produit')->findAll();

         // On vérifie que le produit avc un $codebarre existe bien, sinon, erreur 404.
        if(!$produit)
        {
           throw $this->createNotFoundException('Produit[code barre='.$codebarre.'] inexistant');
        }
      
        $form = $this->get('form.factory')->create(new ProduitType, $produit);
               
        if ($form->handleRequest($request)->isValid()) 
        {

            if ($form->get('Valider')->isClicked())  
            {
              $em->persist($produit);
              $em->flush();
              return $this->redirect($this->generateUrl('gestion_stock_afficher_produit', array('code' => $codebarre)));
            
            }

             if ($form->get('Annuler')->isClicked())  
            {
                 return $this->redirect($this->generateUrl('gestion_stock_lister_produit',array('produits' => $produits)));
            }          
            
        }

        return $this->render('PharmacieStockBundle:Produit:modifier.html.twig', array(
                'codebarre' => $codebarre,
                'formulaire' => $form->createView(), 
                'code' => $produit));
    }

    //supprimer produit
    public function supprimerAction(Request $request, $codebarre)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('PharmacieStockBundle:Produit')->findOneBy(array('codebarre' => $codebarre));
        $produits = $em->getRepository('PharmacieStockBundle:Produit')->findAll();

         // On vérifie que le produit avc un $codebarre existe bien, sinon, erreur 404.
        if(!$produit)
        {
            throw $this->createNotFoundException('Produit[code barre='.$codebarre.'] inexistant');
        }
        $em->remove($produit);
        $em->flush();
        return $this->redirect($this->generateUrl('gestion_stock_lister_produit',array('produits' => $produits)));
    }

        /* 
    * statistiques associés aux produits
    */

    public function statistiquesAction(){

        $resultats = array();

        //selectionner tous les produits
        $produits = $this->getDoctrine()->getManager()
                    ->getRepository("PharmacieStockBundle:Produit")
                    ->findAll();

        //le nombre de produits 
        $nb_total_produits = 0;

       //l'estiamtion en termes de coût
       $estimation_cout = 0;

       $indexes = 0;
       $temps  = array();


        foreach ($produits as $key => $produit){

            //le nombre de produits dans le stock
            $temp = array('libelle' => $produit->getLibelle(),'prixunitaire' => $produit->getPrixunitaire());
            
            
            if( !in_array($temp, $temps)){
                
                $temps[$indexes] = array(
                    'libelle' => $produit->getLibelle(),
                    'prixunitaire' => $produit->getPrixunitaire()
                );

                $resultats[$indexes] = array(
                    'id' => $produit->getId(),
                    'libelle' => $produit->getLibelle(),
                    'nb_produits' => 0,
                    'prixunitaire' => $produit->getPrixunitaire(),
                    'estimation_cout' => 0
                );

                

                foreach ($produits as $a_key => $a_produit) {
                    if($resultats[$indexes]['libelle'] == $a_produit->getLibelle() && $resultats[$indexes]['prixunitaire'] == $a_produit->getPrixunitaire()){
                        $resultats[$indexes]['nb_produits']++;
                        $resultats[$indexes]['estimation_cout'] += $a_produit->getPrixunitaire();
                    }
                }

                $indexes++;

            }
            
        }
        
        return $this->render('PharmacieStockBundle:Produit:statistiques.html.twig', array('produits' => $resultats));
    }

    //Avec le Bundle que kalidou a proposé
    public function VoirStatsAction(){

        //$sql = "select categorie.libelle as libelle,categorie_id as categorie,sum(quantite) as nbProduits from produit,stock,categorie where produit_id=produit.id and categorie_id = categorie.id group by categorie_id;";
        $sql1 = "SELECT categorie.libelle AS libelle, stock.categorie AS categorie,sum(stock.quantite) as nbProduits FROM stock,categorie WHERE stock.categorie = categorie.id GROUP BY stock.categorie;";

        $em = $this->getDoctrine()->getManager();
        $statement = $em->getConnection()->prepare($sql);
        $statement->execute();
        $resultats = $statement->fetchAll();

        $TabCategories =  array();
        $TabNbProduits =  array();
        $TabLibelle =  array();

        $dataTable2 = new DataTable\DataTable();
        $dataTable2->addColumn('id1', 'Categorie', 'string');
        $dataTable2->addColumnObject(new DataTable\DataColumn('id2', 'Nombre de produits', 'number'));
        //$dataTable2->addColumnObject(new DataTable\DataColumn('id3', 'label 3', 'number'));  //Utile quand on veut ajouter une autre courbe

        $i = 0;
        foreach ($resultats as $key => $value) {
           $TabCategories[] = $value['categorie'];
           $TabNbProduits[] = (int)$value['nbProduits']; //renvoie un tableau mais de string donc on le convertit en int
           $TabLibelle[] = $value['libelle'];
           $dataTable2->addRow(array($TabLibelle[$i],$TabNbProduits[$i]));
           $i+=1;
        }

    return $this->render(
                    'PharmacieStockBundle:Produit:statistiquesVoir.html.twig', 
                    array(
                         'dataTable2' => $dataTable2->toArray(),
                    )
                );
    }

    //Avec le bundle que j'avais utilisé
    public function VoirStats1Action(){

         $sql1 = "SELECT categorie.libelle AS libelle, stock.categorie AS categorie,sum(stock.quantite) as nbProduits FROM stock,categorie WHERE stock.categorie = categorie.id GROUP BY stock.categorie;";

        $em = $this->getDoctrine()->getManager();
        $statement = $em->getConnection()->prepare($sql1);
        $statement->execute();
        $resultats = $statement->fetchAll();

        $TabCategories =  array();
        $TabNbProduits =  array();

        /*Dans un tableau à une ligne on recupere d'une part les differentes categorie,
        d'autres part le nombre de produit pour chaque categorie */
        $i=0;
        foreach ($resultats as $key => $value) {
           $TabCategories[] = $value['categorie'];
           $TabNbProduits[] = (int)$value['nbProduits']; //renvoie un tableau mais de string donc on le convertit en int
           $TabLibelle[] = $value['libelle'];
          $i +=1;
        }

      $Resultats = array(
            array("name" => "Nombre de Produits",    //legende du graphe
                  "data" =>  $TabNbProduits
            ),
            /* array("name" => "Categorie",
                   "data" => array(8,3)
           ), */  //Utile quand on veut tracer 2 courbes sur le meme graphe
        );
         // var_dump($TabNbProduits);
         // die;
        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $ob->title->text('Nombre de Produits par Categorie de Medicaments');
        $ob->xAxis->title(array('text'  => "Categorie de Medicaments"));
        $ob->xAxis->categories($TabLibelle);//On place les categories dans en abcisse
        $ob->yAxis->title(array('text'  => "Nombre de produits"));
        $ob->series($Resultats);

        return $this->render('PharmacieStockBundle:Produit:voirStats.html.twig', array(
            'chart' => $ob
        ));

    }

    public function ficheAction($id){
        $em = $this->getDoctrine()->getManager();

        $produit = $em->getRepository('PharmacieStockBundle:Produit')->find($id);
        
        $stock = $em->getRepository('PharmacieStockBundle:Stock')->find($produit->getLibelle());
        
        $categorie = $em->getRepository('PharmacieStockBundle:Categorie')->find($stock->getCategorie());

        $resultat = array(
            "produit" => $produit,
            "stock" => $stock,
            "categorie" => $categorie
        );

        return $this->render('PharmacieStockBundle:Produit:fiche.html.twig', array("fiche"  => $resultat ));
    }


    /*
    * Retourne dynamique la liste des produits(ie stocks) lorsque la catégorie/sous-categorie change
    *
    */
    public function whenCategorieChangeAction(){
        $request = $this->container->get('request');
        if($request->isXmlHttpRequest()){

            $em = $this->getDoctrine()->getManager();
            //echo $request->request->get('element');
            $element = $request->query->get('element');
            $id_element = $request->query->get('id_element');


            //selectionner toutes les sous-categories de cette catégorie, et les stocks de chaque sous-categories
            if($element == "categorie"){ 

                if($id_element=="*"){
                    $req="SELECT * FROM categorie";
                    $statement = $em->getConnection()->prepare($req);
                    $statement->execute();
                    $categories = $statement->fetchAll();

                    $req="SELECT * FROM sous_categorie";
                    $statement = $em->getConnection()->prepare($req);
                    $statement->execute();
                    $souscategories = $statement->fetchAll();

                    $req="SELECT * FROM stock";
                    $statement = $em->getConnection()->prepare($req);
                    $statement->execute();
                    $produits = $statement->fetchAll();

                    return new JsonResponse(array(
                        "categories" => $categories,
                        "souscategories" => $souscategories,
                        "produits" => $produits
                    ));
                }
                else{
                    
                    $req="SELECT * FROM sous_categorie WHERE categorie=$id_element";
                    $statement = $em->getConnection()->prepare($req);
                    $statement->execute();
                    $souscategories = $statement->fetchAll();

                    //si la categorie n'a pas de sous-categorie, alors donner tous les stocks
                    if(empty($souscategories)){
                        $req="SELECT * FROM stock WHERE categorie=$id_element";
                        $statement = $em->getConnection()->prepare($req);
                        $statement->execute();
                        $produits = $statement->fetchAll();
                        
                    }else{
                        $req="SELECT stock.* FROM stock,sous_categorie,categorie WHERE stock.categorie=sous_categorie.id AND sous_categorie.categorie=$id_element;";
                        $statement = $em->getConnection()->prepare($req);
                        $statement->execute();
                        $produits = $statement->fetchAll();
                        
                    }

                    return new JsonResponse(array(
                        'produits' => $produits,
                        'souscategories' => $souscategories
                    ));
                }

            }
            elseif($element == "souscategorie"){ //si c'est la souscategorie qui change, liste tous les stocks
                if($id_element=="*"){
                    $req="SELECT * FROM sous_categorie";
                    $statement = $em->getConnection()->prepare($req);
                    $statement->execute();
                    $souscategories = $statement->fetchAll();

                    $req="SELECT * FROM stock";
                    $statement = $em->getConnection()->prepare($req);
                    $statement->execute();
                    $produits = $statement->fetchAll();
                    
                }
                else{
                    $req="SELECT * FROM stock WHERE categorie=:$id_element";
                    $statement = $em->getConnection()->prepare($req);
                    $statement->execute();
                    $produits = $statement->fetchAll();
                    $souscategories = array();

                }

                return new JsonResponse(array(
                        "souscategories" => $souscategories,
                        "produits" => $produits
                    ));
            }
            else{
                return new Response("Mauvais requetelo!!!");
            }
        }else{
                return new Response("Mauvais requete!!!");
        }
    }

}