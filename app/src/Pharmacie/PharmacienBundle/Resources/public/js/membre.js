/**********************************************************/
/*  Fonction permettant de charger les membres physiques  */
/*                                                        */
/**********************************************************/

function membrephysique()
{
    var inf = localStorage.getItem("inf");
    var sup = localStorage.getItem("sup");
    window.location.href = "http://localhost:8080/oms/web/app_dev.php/membrePhysique/"+inf+"/"+sup;  
}

/**********************************************************/
/*    Fonction permettant de charger les membres morales  */
/*                                                        */
/**********************************************************/

function membremorale()
{
    var infs = localStorage.getItem("infs");
    var sups = localStorage.getItem("sups");
    window.location.href = "http://localhost:8080/oms/web/app_dev.php/membreMorale/"+infs+"/"+sups;  
}

function initCeic()
{
    var inf = localStorage.getItem("inf");
    var sup = localStorage.getItem("sup");
    window.location.href = "http://localhost:8080/oms/web/app_dev.php/ceic/init/"+inf+"/"+sup; 
}



/***************************************************************************************************************************************/
/*  Fonction permettant la navigation vers la droite (intervalle se rapproche de total) dans le tableau de board de gestion des membres */
/*                                                                                                                                     */
/***************************************************************************************************************************************/

function suivantIndividu(total)
{
    var inf = localStorage.getItem("inf");
    var sup = localStorage.getItem("sup");
    inf = parseInt(inf) + 200;
    sup = parseInt(sup) + 200;
    if (sup > total)
    {
        sup = total;
        document.getElementById("next").disabled = true;
        inf = total - 200;
    }
    else
    {
        document.getElementById("back").disabled = false;
    }
        
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","http://localhost:8080/oms/web/app_dev.php/loadNewDataIndividu/"+inf+"/"+sup,true);    
    xmlhttp.onreadystatechange = function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            localStorage.setItem("inf",inf);
            localStorage.setItem("sup",sup);
            document.getElementById("tab").innerHTML = xmlhttp.responseText;
            $('#mytable').DataTable(
                 {
                    "aoColumnDefs": [
                    { 
                        'bSortable': false, 'aTargets': [ 1,2,3,4,5,6,7,8,9,10 ] 
                    }]
                }
            );
            history.pushState({ path: this.path }, '', 'http://localhost:8080/oms/web/app_dev.php/membrePhysique/'+inf+'/'+sup);
            document.getElementById("next").innerHTML = 'Suivant <span class="glyphicon glyphicon-chevron-right"></span> '+sup;
            document.getElementById("back").innerHTML = inf+'<span class="glyphicon glyphicon-chevron-left"></span> Précédent';
    	}
    };
    $(function() {
        $('a[data-confirm]').click(function(ev) {
            var href = $(this).attr('href');
            if (!$('#dataConfirmModal').length) {
                $('body').append('<div id="dataConfirmModal" class="modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel" style="text-align: center; color: white; background-color: #83b719; padding: 5px">Confirmation de l\'opération en cours</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Non</button><a class="btn btn-success" id="dataConfirmOK">Oui</a></div></div></div></div>');
            }
            $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
            $('#dataConfirmOK').attr('href', href);
            $('#dataConfirmModal').modal({show:true});
            return false;
        });
    });
    xmlhttp.send();

}

/*************************************************************************************************************************************************/
/*  Fonction permettant la navigation vers la gauche (intervalle se rapproche de zero) dans le tableau de board de gestion des membres physiques */
/*                                                                                                                                               */
/*************************************************************************************************************************************************/

function precedentIndividu(total)
{
    var inf = localStorage.getItem("inf");
    var sup = localStorage.getItem("sup");
    inf = parseInt(inf) - 200;
    sup = parseInt(sup) - 200;
    if (inf < 0)
    {
        inf = 0;
        document.getElementById("back").disabled = true;
        sup = 200;
    }
    else
    {
        document.getElementById("next").disabled = false;

    }
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","http://localhost:8080/oms/web/app_dev.php/loadNewDataIndividu/"+inf+"/"+sup,true);    
    xmlhttp.onreadystatechange = function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            localStorage.setItem("inf",inf);
            localStorage.setItem("sup",sup);
            
            document.getElementById("tab").innerHTML = xmlhttp.responseText;
            $('#mytable').DataTable(
                {
                    "aoColumnDefs": [
                    { 
                        'bSortable': false, 'aTargets': [ 1,2,3,4,5,6,7,8,9,10 ] 
                    }]
                }

            );
            
            history.pushState({ path: this.path }, '', 'http://localhost:8080/oms/web/app_dev.php/membrePhysique/'+inf+'/'+sup);      

            document.getElementById("next").innerHTML = 'Suivant <span class="glyphicon glyphicon-chevron-right"></span> '+sup;
            
            document.getElementById("back").innerHTML = inf+'<span class="glyphicon glyphicon-chevron-left"></span> Précédent';

        }
    };
    $(function() {
        $('a[data-confirm]').click(function(ev) {
            var href = $(this).attr('href');
            if (!$('#dataConfirmModal').length) {
                $('body').append('<div id="dataConfirmModal" class="modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel" style="text-align: center; color: white; background-color: #83b719; padding: 5px">Confirmation de l\'opération en cours</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Non</button><a class="btn btn-success" id="dataConfirmOK">Oui</a></div></div></div></div>');
            }
            $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
            $('#dataConfirmOK').attr('href', href);
            $('#dataConfirmModal').modal({show:true});
            
            return false;
        });
    });
    xmlhttp.send();
}

/*********************************************************************************************/
/*  Fonction permettant definir une plage de membre physique contenant le numéro recherche  */
/*                                                                                          */
/********************************************************************************************/

function rechercheUserPhysique()
{
    var valeur = document.getElementById ("numUser").value;
    var total = document.getElementById ("total").value;
    if (valeur.length == 0) {
        alert("Veuillez rentrer au moins un numero de compte valide");
    }
    else
    {
    	valeur = parseInt(valeur);
    	if(Number.isInteger(valeur)) 
    	{
        	if ( valeur < parseInt(total) && valeur > 0 )
        	{
            	var inf = valeur;
            	var sup = valeur+200;
                if(sup > total)
                {
                    sup = total;
                    inf = total -200;
                }
            	xmlhttp = new XMLHttpRequest();
            	xmlhttp.open("GET","http://localhost:8080/oms/web/app_dev.php/loadNewDataIndividu/"+inf+"/"+sup,true);    
            	xmlhttp.onreadystatechange = function(){
            	if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
            	{
                	localStorage.setItem("inf",inf);
                	localStorage.setItem("sup",sup);
                	document.getElementById("tab").innerHTML = xmlhttp.responseText;
                	$('#mytable').DataTable(
	                {
	                    "aoColumnDefs": [
	                    { 
	                        'bSortable': false, 'aTargets': [ 1,2,3,4,5,6,7,8,9,10 ] 
	                    }]
	                });
                	history.pushState({ path: this.path }, '', 'http://localhost:8080/oms/web/app_dev.php/membrePhysique/'+inf+'/'+sup);
                	document.getElementById("next").innerHTML = 'Suivant <span class="glyphicon glyphicon-chevron-right"></span> '+sup;
                    document.getElementById("back").innerHTML = inf+'<span class="glyphicon glyphicon-chevron-left"></span> Précédent';
                    $(function() 
	                {
    	                $('a[data-confirm]').click(function(ev)
        	            {
            	            var href = $(this).attr('href');
                	        if (!$('#dataConfirmModal').length)
                    	    {
                        	    $('body').append('<div id="dataConfirmModal" class="modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel" style="text-align: center; color: white; background-color: #83b719; padding: 5px">Confirmation de l\'opération en cours</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Non</button><a class="btn btn-success" id="dataConfirmOK">Oui</a></div></div></div></div>');
                        	}
                        	$('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
                        	$('#dataConfirmOK').attr('href', href);
                        	$('#dataConfirmModal').modal({show:true});
                               return false;
                        });
                	});
            	}};
            	xmlhttp.send();
        	}
        	else
        	{
            	alert("Veuillez rentrer une valeur numerique compris entre 0 et "+total);
        	}
    	}
    	else
    	{
        	alert("Veuillez rentrer une valeur numerique");
    	}  
   	}
}	

/***********************************************************************************************************************************************/
/*  Fonction permettant la navigation vers la droite (intervalle se rapproche de total) dans le tableau de board de gestion des membres morale */
/*                                                                                                                                             */
/***********************************************************************************************************************************************/

function suivantSociete(total)
{
    var infs = localStorage.getItem("infs");
    var sups = localStorage.getItem("sups");
    infs = parseInt(infs) + 200;
    sups = parseInt(sups) + 200;

    if (sups > total)
    {
        sups = total;
        document.getElementById("next").disabled = true;
        document.getElementById("back").disabled = false;
        infs = total - 200;
    }
    else
    {
        document.getElementById("back").disabled = false;
    }
        
    xmlhttp = new XMLHttpRequest();

    xmlhttp.open("GET","http://localhost:8080/oms/web/app_dev.php/loadNewDataSociete/"+infs+"/"+sups,true);    
    xmlhttp.onreadystatechange = function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {

            localStorage.setItem("infs",infs);
            localStorage.setItem("sups",sups);
            document.getElementById("tab").innerHTML = xmlhttp.responseText;
            $('#mytable').DataTable(
            {
                "aoColumnDefs": [
                { 
                    'bSortable': false, 'aTargets': [ 1,2,3,4,5,6,7,8,9 ] 
                }]
            });

             history.pushState({ path: this.path }, '', 'http://localhost:8080/oms/web/app_dev.php/membreMorale/'+infs+'/'+sups);

            document.getElementById("next").innerHTML = 'Suivant <span class="glyphicon glyphicon-chevron-right"></span> '+sups;
            
            document.getElementById("back").innerHTML = infs+'<span class="glyphicon glyphicon-chevron-left"></span> Précédent';
            
            $(function() {
            $('a[data-confirm]').click(function(ev) {
                var href = $(this).attr('href');
                if (!$('#dataConfirmModal').length) {
                    $('body').append('<div id="dataConfirmModal" class="modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel" style="text-align: center; color: white; background-color: #83b719; padding: 5px">Confirmation de l\'opération en cours</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Non</button><a class="btn btn-success" id="dataConfirmOK">Oui</a></div></div></div></div>');
                }
                $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
                $('#dataConfirmOK').attr('href', href);
                $('#dataConfirmModal').modal({show:true});
                
                return false;
            });
        });
    }};
    xmlhttp.send();
}
        

/*************************************************************************************************************************************************/
/*  Fonction permettant la navigation vers la gauche (intervalle se rapproche de zero) dans le tableau de board de gestion des membres physiques */
/*                                                                                                                                               */
/*************************************************************************************************************************************************/

function precedentSociete(total)
{
    var infs = localStorage.getItem("infs");
    var sups = localStorage.getItem("sups");
    infs = parseInt(infs) - 200;
    sups = parseInt(sups) - 200;
    if (infs <= 0)
    {
        infs = 0;
        document.getElementById("back").disabled = true;
        document.getElementById("next").disabled = false;
        sups = 200;
    }
    else
    {
        document.getElementById("next").disabled = false;

    }
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","http://localhost:8080/oms/web/app_dev.php/loadNewDataSociete/"+infs+"/"+sups,true);    
    xmlhttp.onreadystatechange = function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            localStorage.setItem("infs",infs);
            localStorage.setItem("sups",sups);
            
            document.getElementById("tab").innerHTML = xmlhttp.responseText;
            $('#mytable').DataTable(
            {
                "aoColumnDefs": [
                { 
                    'bSortable': false, 'aTargets': [ 1,2,3,4,5,6,7,8,9 ] 
                }]
            });
            
            history.pushState({ path: this.path }, '', 'http://localhost:8080/oms/web/app_dev.php/membreMorale/'+infs+'/'+sups);      

            document.getElementById("next").innerHTML = 'Suivant <span class="glyphicon glyphicon-chevron-right"></span> '+sups;
            
            document.getElementById("back").innerHTML = infs+'<span class="glyphicon glyphicon-chevron-left"></span> Précédent';

            $(function() {
            $('a[data-confirm]').click(function(ev) {
                var href = $(this).attr('href');
                if (!$('#dataConfirmModal').length) {
                    $('body').append('<div id="dataConfirmModal" class="modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel" style="text-align: center; color: white; background-color: #83b719; padding: 5px">Confirmation de l\'opération en cours</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Non</button><a class="btn btn-success" id="dataConfirmOK">Oui</a></div></div></div></div>');
                }
                $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
                $('#dataConfirmOK').attr('href', href);
                $('#dataConfirmModal').modal({show:true});
                
                return false;
            });
        });

        }
    };
    xmlhttp.send();
}


/******************************************************************************************/
/*  Fonction permettant definir une plage de membre morale contenant le numéro recherche  */
/*                                                                                        */
/*****************************************************************************************/


function rechercheUserMorale()
{
    var valeur = document.getElementById ("numUser").value;
    var total = document.getElementById ("total").value;
    if (valeur.length == 0) {
        alert("Veuillez rentrer au moins un numero de compte valide");
    }
    else
        {
        valeur = parseInt(valeur);
        if(Number.isInteger(valeur)) 
        {
            if ( valeur < parseInt(total) && valeur >= 0 )
            {
                var infs = valeur;
                var sups = valeur+200;
                if(sups > total)
                {
                    sups = total;
                    infs = total -200;
                }
                xmlhttp = new XMLHttpRequest();
                xmlhttp.open("GET","http://localhost:8080/oms/web/app_dev.php/loadNewDataSociete/"+infs+"/"+sups,true);    
                xmlhttp.onreadystatechange = function(){
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
                {
                    localStorage.setItem("infs",infs);
                    localStorage.setItem("sups",sups);
                    document.getElementById("tab").innerHTML = xmlhttp.responseText;
                    $('#mytable').DataTable(
		            {
		                "aoColumnDefs": [
		                { 
		                    'bSortable': false, 'aTargets': [ 1,2,3,4,5,6,7,8,9 ] 
		                }]
		            });
                    history.pushState({ path: this.path }, '', 'http://localhost:8080/oms/web/app_dev.php/membreMorale/'+infs+'/'+sups);
                    document.getElementById("next").innerHTML = 'Suivant <span class="glyphicon glyphicon-chevron-right"></span> '+sups;
            
                    document.getElementById("back").innerHTML = infs+'<span class="glyphicon glyphicon-chevron-left"></span> Précédent';
                    $(function() 
                    {
                        $('a[data-confirm]').click(function(ev)
                        {
                            var href = $(this).attr('href');
                            if (!$('#dataConfirmModal').length)
                            {
                                $('body').append('<div id="dataConfirmModal" class="modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel" style="text-align: center; color: white; background-color: #83b719; padding: 5px">Confirmation de l\'opération en cours</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Non</button><a class="btn btn-success" id="dataConfirmOK">Oui</a></div></div></div></div>');
                            }
                            $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
                            $('#dataConfirmOK').attr('href', href);
                            $('#dataConfirmModal').modal({show:true});
                            
                            return false;
                        });
                    });
                }};
                xmlhttp.send();
            }
            else
            {
                alert("Veuillez rentrer une valeur numerique compris entre 0 et "+total);
            }
        }
        else
        {
            alert("Veuillez rentrer une valeur numerique");
        }
    }  
}

/******************************************************************************************/
/*  Fonction permettant de télécharger la liste des membres physiques au format PDF       */
/*                                                                                        */
/*****************************************************************************************/

function downloadMPPDF()
{
    var inf = localStorage.getItem("inf");
    var sup = localStorage.getItem("sup");
    window.location.href = "http://localhost:8080/oms/web/app_dev.php/downloadMPPDF/"+inf+"/"+sup;
}


/******************************************************************************************/
/*  Fonction permettant de télécharger la liste des membres physiques au format Excel     */
/*                                                                                        */
/*****************************************************************************************/


function downloadMPExcel()
{
    var inf = localStorage.getItem("inf");
    var sup = localStorage.getItem("sup");
    window.location.href = "http://localhost:8080/oms/web/app_dev.php/downloadMPExcel/"+inf+"/"+sup;
}

/******************************************************************************************/
/*  Fonction permettant de télécharger la liste des membres morales au format PDF       */
/*                                                                                        */
/*****************************************************************************************/


function downloadMMPDF()
{
    var infs = localStorage.getItem("infs");
    var sups = localStorage.getItem("sups");
    window.location.href = "http://localhost:8080/oms/web/app_dev.php/downloadMMPDF/"+infs+"/"+sups;
}


/******************************************************************************************/
/*  Fonction permettant de télécharger la liste des membres physiques au format Excel     */
/*                                                                                        */
/*****************************************************************************************/


function downloadMMExcel()
{
    var infs = localStorage.getItem("infs");
    var sups = localStorage.getItem("sups");
    window.location.href = "http://localhost:8080/oms/web/app_dev.php/downloadMMExcel/"+infs+"/"+sups;
}
