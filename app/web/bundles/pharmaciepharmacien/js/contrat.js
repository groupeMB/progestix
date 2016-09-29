/************************************************/
/*  Fonction permettant de charger des contrats */
/*                                              */
/************************************************/

function contrat()
{
    var infc = localStorage.getItem("infc");
    var supc = localStorage.getItem("supc");
    window.location.href = "http://localhost:8080/oms/web/app_dev.php/contrat/"+infc+"/"+supc;
      
}


	/***************************************************************************************************************************************/
	/*  Fonction permettant la navigation vers la droite (intervalle se rapproche de total) dans le tableau de board de gestion des contrats */
	/*                                                                                                                                     */
	/***************************************************************************************************************************************/

function suivantContrat(total)
{
    var infc = localStorage.getItem("infc");
    var supc = localStorage.getItem("supc");
    infc = parseInt(infc) + 200;
    supc = parseInt(supc) + 200;

    if (supc > total)
    {
        supc = total;
        document.getElementById("next").disabled = true;
        infc = total - 200;
    }
    else
    {
        document.getElementById("back").disabled = false;
    }
        
    xmlhttp = new XMLHttpRequest();

    xmlhttp.open("GET","http://localhost:8080/oms/web/app_dev.php/loadNewDataContrat/"+infc+"/"+supc,true);    
    xmlhttp.onreadystatechange = function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {

            localStorage.setItem("infc",infc);
            localStorage.setItem("supc",supc);
            document.getElementById("tab").innerHTML = xmlhttp.responseText;
            $('#mytable').DataTable(
            {
                "aoColumnDefs": [
                { 
                    'bSortable': false, 'aTargets': [ 1,2,3,4,5,6,7,8,9,10,11,12,13,14 ] 
                }]
            });

             history.pushState({ path: this.path }, '', 'http://localhost:8080/oms/web/app_dev.php/contrat/'+infc+'/'+supc);

            document.getElementById("next").innerHTML = 'Suivant <span class="glyphicon glyphicon-chevron-right"></span> '+supc;
            
            document.getElementById("back").innerHTML = infc+'<span class="glyphicon glyphicon-chevron-left"></span> Précédent';
            
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

function precedentContrat(total)
{
    var infc = localStorage.getItem("infc");
    var supc = localStorage.getItem("supc");
    infc = parseInt(infc) - 200;
    supc = parseInt(supc) - 200;
    if (infc < 0)
    {
        infc = 0;
        document.getElementById("back").disabled = true;
        supc = 200;
    }
    else
    {
        document.getElementById("next").disabled = false;

    }
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","http://localhost:8080/oms/web/app_dev.php/loadNewDataContrat/"+infc+"/"+supc,true);    
    xmlhttp.onreadystatechange = function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            localStorage.setItem("infc",infc);
            localStorage.setItem("supc",supc);
            
            document.getElementById("tab").innerHTML = xmlhttp.responseText;
            $('#mytable').DataTable(
            {
                "aoColumnDefs": [
                { 
                    'bSortable': false, 'aTargets': [ 1,2,3,4,5,6,7,8,9,10,11,12,13,14 ] 
                }]
            });
            
            history.pushState({ path: this.path }, '', 'http://localhost:8080/oms/web/app_dev.php/contrat/'+infc+'/'+supc);      

            document.getElementById("next").innerHTML = 'Suivant <span class="glyphicon glyphicon-chevron-right"></span> '+supc;
            
            document.getElementById("back").innerHTML = infc+'<span class="glyphicon glyphicon-chevron-left"></span> Précédent';

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


/**********************************************************************************/
/*  Fonction permettant de télécharger la liste des contrats au format PDF       */
/*                                                                               */
/*********************************************************************************/


function downloadCPDF()
{
    var infc = localStorage.getItem("infc");
    var supc = localStorage.getItem("supc");
    window.location.href = "http://localhost:8080/oms/web/app_dev.php/downloadCPDF/"+infc+"/"+supc;
}


/**********************************************************************************/
/*  Fonction permettant de télécharger la liste des contrats au format Excel       */
/*                                                                               */
/*********************************************************************************/

function downloadCExcel()
{
    var infc = localStorage.getItem("infc");
    var supc = localStorage.getItem("supc");
    window.location.href = "http://localhost:8080/oms/web/app_dev.php/downloadCExcel/"+infc+"/"+supc;
}


/************************************************************************************/
/*  Fonction permettant definir une plage de contrat contenant le numéro recherche  */
/*                                                                                  */
/************************************************************************************/

function rechercheContrat()
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
                var infc = valeur;
                var supc = valeur+200;
                if(supc > total)
                {
                    supc = total;
                    infc = total -200;
                }
                xmlhttp = new XMLHttpRequest();
                xmlhttp.open("GET","http://localhost:8080/oms/web/app_dev.php/loadNewDataContrat/"+infc+"/"+supc,true);    
                xmlhttp.onreadystatechange = function(){
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
                {
                    localStorage.setItem("infc",infc);
                    localStorage.setItem("supc",supc);
                    document.getElementById("tab").innerHTML = xmlhttp.responseText;
                    $('#mytable').DataTable(
		            {
		                "aoColumnDefs": [
		                { 
		                    'bSortable': false, 'aTargets': [ 1,2,3,4,5,6,7,8,9,10,11,12,13,14 ] 
		                }]
		            });
                    history.pushState({ path: this.path }, '', 'http://localhost:8080/oms/web/app_dev.php/contrat/'+infc+'/'+supc);
                    document.getElementById("next").innerHTML = 'Suivant <span class="glyphicon glyphicon-chevron-right"></span> '+supc;
            
                    document.getElementById("back").innerHTML = infc+'<span class="glyphicon glyphicon-chevron-left"></span> Précédent';
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