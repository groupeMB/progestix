
/*******************************************************************************************************/
/*  Fonction permettant d'afficher dynamiquement la date et l'heure sur le dashboard de l'utilisateur  */
/*                                                                                                     */
/*******************************************************************************************************/


function date_heure(heure)
{
    date = new Date;
    annee = date.getFullYear();
    moi = date.getMonth();
    mois = new Array('Janvier', 'F&eacute;vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao&ucirc;t', 'Septembre', 'Octobre', 'Novembre', 'D&eacute;cembre');
    j = date.getDate();
    jour = date.getDay();
    jours = new Array('Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam');
    h = date.getHours();
    if(h<10)
    {
            h = "0"+h;
    }
    m = date.getMinutes();
    if(m<10)
    {
            m = "0"+m;
    }
    s = date.getSeconds();
    if(s<10)
    {
            s = "0"+s;
    }
    resultat = ''+jours[jour]+' '+j+' '+mois[moi]+' '+annee+' | '+h+':'+m+':'+s;
    if(document.getElementById(heure))
    {
        document.getElementById(heure).innerHTML = resultat;
        setTimeout('date_heure("'+heure+'");','1000');
        return true;
    }
}

/********************************************************/
/*  Fonction permettant de faire flotter le menu        */
/*                                                      */
/********************************************************/

function menuflottant()
{
    var all = document.getElementById("flotMenu");
    var tableau = document.getElementById("contenuflot");
    var menucourt = document.getElementById("menuCourt");
    var buttonflot = document.getElementById("buttonflot");
    if(all.className.match(/(?:^|\s)fixe(?!\S)/))
    {
        all.className = "flot";
        tableau.style.width="95%";
        menucourt.style.display="block";
        buttonflot.style.width = "3%";
        buttonflot.innerHTML='<span class="glyphicon glyphicon-chevron-right"></span>';
    }
    else
    {
        all.className = "fixe";
        tableau.style.width="79%";
        menucourt.style.display="none";
        buttonflot.style.width = "18.5%";
        buttonflot.innerHTML='<span class="glyphicon glyphicon-chevron-left"></span>Glisser menu';
    }
    
}


/*
* fonctions pour les ajouts de stock
*
*
*/

/*******************************************************************************************************/
/*  Fonction permettant d'ajouter dynamiquement des champs au stock  */
/*                                                                                                     */
/*******************************************************************************************************/




function ajouter_keyword(){
    $('input').each(function(k, v){
                if ($(this).attr('_type')) {
                    $(this).prop('type', $(this).attr('_type'));
                }
            });
    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var $container = $('#keywords_div');
    //
     //console.log($('#keywords'));
    console.log("ajoute de keyword");

    //$container.append($addLink);

    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = $container.find(':input').length //$container.length; //

    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
    if (index == 0) {
      addCategory($container);
    } else {
      // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
      $container.children('div').each(function() {
        addDeleteLink($(this));
      });
    }

    // on ajoute l'évènement associé au click du bouton ajoute keyword 
    var $addLink = $('#ajout_keyword');//$('<a href="#" id="ajout_keyword" class="btn btn-default">Ajouter une clé</a>');
    $addLink.click(function(e) {
        console.log(index);
      addCategory($container);
      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });

    // La fonction qui ajoute un formulaire Categorie
    function addCategory($container) {
      // Dans le contenu de l'attribut « data-prototype », on remplace :
      // - le texte "__name__label__" qu'il contient par le label du champ
      // - le texte "__name__" qu'il contient par le numéro du champ
      var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, '')
                                                            .replace(/__name__/g, index));

      // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
      if(index != 0){
            addDeleteLink($prototype);
            
        }else{
            $prototype.append('<div class="col-sm-2">\
                <a href="" id="ajout_keyword"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>\
            </div>');
        }

      // On ajoute le prototype modifié à la fin de la balise <div>
      $container.append($prototype);

      // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
      index++;
    }

    // La fonction qui ajoute un lien de suppression d'une catégorie
    function addDeleteLink($prototype) {
      // Création du lien
      $deleteLink = $('<div class="col-sm-2">\
                <a href="" id=""><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-minus"></span></button></a>\
            </div>');

      // Ajout du lien
      $prototype.append($deleteLink);

      // Ajout du listener sur le clic du lien
      $deleteLink.click(function(e) {
        $prototype.remove();
        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
      });
    }
}

function ajouter_champ_produit(){
    $('input').each(function(k, v){
                if ($(this).attr('_type')) {
                    $(this).prop('type', $(this).attr('_type'));
                }
            });
    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var $container = $('#champs_div');
    //
     //console.log($('#keywords'));
    console.log("ajoute de keyword");

    //$container.append($addLink);

    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = $container.find(':input').length //$container.length; //

    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
    if (index == 0) {
      addCategory($container);
    } else {
      // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
      $container.children('div').each(function() {
        addDeleteLink($(this));
      });
    }

    // on ajoute l'évènement associé au click du bouton ajoute keyword 
    var $addLink = $('#ajout_champs');//$('<a href="#" id="ajout_keyword" class="btn btn-default">Ajouter une clé</a>');
    $addLink.click(function(e) {
        console.log(index);
      addCategory($container);
      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });

    // La fonction qui ajoute un formulaire Categorie
    function addCategory($container) {
      // Dans le contenu de l'attribut « data-prototype », on remplace :
      // - le texte "__name__label__" qu'il contient par le label du champ
      // - le texte "__name__" qu'il contient par le numéro du champ
      var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, '')
                                                            .replace(/__name__/g, index));

      // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
      if(index != 0){
            addDeleteLink($prototype);
            
        }else{
            $prototype.append('<div class="col-sm-2">\
                <a href="" id="ajout_champs"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button></a>\
            </div>');
        }

      // On ajoute le prototype modifié à la fin de la balise <div>
      $container.append($prototype);

      // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
      index++;
    }

    // La fonction qui ajoute un lien de suppression d'une catégorie
    function addDeleteLink($prototype) {
      // Création du lien
      $deleteLink = $('<div class="col-sm-2">\
                <a href="" id=""><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-minus"></span></button></a>\
            </div>');

      // Ajout du lien
      $prototype.append($deleteLink);

      // Ajout du listener sur le clic du lien
      $deleteLink.click(function(e) {
        $prototype.remove();
        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
      });
    }
    
}