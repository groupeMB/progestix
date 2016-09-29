
/************************************************************************************************************************************/
/*  Fonction permettant d'iniiliaser les bornes inférieures et supérieures du chargement partiel des données volumineuses dans OMS  */
/*                                                                                                                                  */
/************************************************************************************************************************************/

function initialisation()
{
	//variables utilisées pour le chargement des membres physiques

    localStorage.setItem("inf",0);
    localStorage.setItem("sup",200);

    //variables utilisées pour le chargement des membres morales

    localStorage.setItem("infs",0);
    localStorage.setItem("sups",200);

    //variables utilisées pour le chargement des contrats

    localStorage.setItem("infc",0);
    localStorage.setItem("supc",200);
}


/***************************************************************************/
/*  Fonction permettant de changer d'agence pour les directeurs de caisse  */
/*                                                                         */
/**************************************************************************/

function changerAgence(value)
{

    var inf = localStorage.getItem("inf");
    var sup = localStorage.getItem("sup");
    $(function() 
    {
    	$('input[data-confirm]').click(function(ev)
    	{
        	var href = "http://localhost:8080/oms/web/app_dev.php/changementAgence/"+value+"/"+inf+"/"+sup;
        	if (!$('#dataConfirmModal').length)
        	{
            	$('body').append('<div id="dataConfirmModal" class="modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel" style="text-align: center; color: white; background-color: #83b719; padding: 5px">Confirmation de changement d\'Agence</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Non</button><a class="btn btn-success" id="dataConfirmOK">Oui</a></div></div></div></div>');
    		}
    		$('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
    		$('#dataConfirmOK').attr('href', href);
    		$('#dataConfirmModal').modal({show:true});
    		return false;
		});
	}); 
}

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
    jours = new Array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
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

/*******************************************************************************************************/
/*  Fonction permettant de changer la position de l'icone dropdown du menu gauche du Dashboard         */
/*                                                                                                     */
/*******************************************************************************************************/

function mycaret(value)
{
    var all = document.getElementsByClassName("changeIconeDropdownPosition");
    var cl = value.children[1];
    var etat = cl.className;
    for(var i=0, len=all.length; i < len; i++){
        if(all[i].className.match(/(?:^|\s)glyphicon glyphicon-hand-up navbar-right changeIconeDropdownPosition(?!\S)/))
        {
            all[i].className = "glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition";
        }
    }

    if(etat == "glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition")
    {
        cl.className='glyphicon glyphicon-hand-up navbar-right changeIconeDropdownPosition';

    }
    else
    {
        cl.className='glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition';  
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
        tableau.style.width="96%";
        menucourt.style.display="block";
        buttonflot.style.width = "3%";
        buttonflot.innerHTML='<span class="glyphicon glyphicon-chevron-right"></span>';
    }
    else
    {
        all.className = "fixe";
        tableau.style.width="79%";
        menucourt.style.display="none";
        buttonflot.style.width = "19%";
        buttonflot.innerHTML='<span class="glyphicon glyphicon-chevron-left"></span>Glisser menu';
    }
    
}

