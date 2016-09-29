/**************************************************************************/
/*  Fonction permettant de verifier la validité d'un numero de téléphone  */
/*                                                                        */
/**************************************************************************/

function verifieTelephoneSMS(telephone)
{
	var code = 0;
	var reg = /[+221]?7\d{8}/;

	// verifier si le numero téléphone est bien défini

	if(typeof(telephone) == 'undefined' || telephone == '' || telephone == ' ')
	{
	    code = "Le numero de téléphone n'est pas défini. Veuillez le renseigner dans SAF puis mettre à jour dans OMS. Merci";
	}

	// verifie si la longueur du nuero est réglementaire
	else if(telephone.length >= 9)
	{

		//verifie si le numero de téléphone respecte la syntaxe normalisée
	    if (reg.test(telephone))
	    {
	        code = "valide";
	    }
	    else
	    {
	        code = "Le format de votre numero de téléphone est incorrecte. Vérifiez que le numero ne comporte des caractères telles que - , / ou que ce n'est pas un numéro de téléphone fixe (prefixe 33). Veuillez le corriger dans SAF puis mettre à jour dans OMS. Merci";
	    }
	}
	else
	{
	      code = "Le numero de téléphone est incomplète. Veuillez le corriger dans SAF puis mettre à jour dans OMS. Merci";
	}
	return code;
}


/***************************************************************************************************************/
/*  Fonction permettant de verifier la validité des attributs pour la souscription d'un membre au service SMS  */
/*                                                                                                             */
/*************************************************************** ***********************************************/

function validationSMS(type)
{
	// récupération des informations de souscription au service sms

    var codeclient = document.getElementById ("codeclient").value;
    var compteproduit = document.getElementById ("compteproduit").value;
    var nom = document.getElementById ("nom").value;
    var prenom = document.getElementById ("prenom").value;
    var telephone = document.getElementById ("telephone").value;
    var empresa = document.getElementById ("empresa").value;
    var codereturn = verifieTelephoneSMS(telephone);
    
    //verifie si le numero de téléphone est valide pour éviter de perdre des sms.
    
    if(codereturn != "valide")
    {
        alert(codereturn);
    }
    else
    {
        if(compteproduit == "")
        {
            alert("Veuillez renseigner le compte produit avant de poursuivre");
        }
        else
        {
            if(document.getElementById("s1").checked == true && document.getElementById("s2").checked == true)
            {
                var service =document.getElementById("s1").value+"-"+document.getElementById("s2").value ;
            }
            else 
            {
                if(document.getElementById ("s2").checked == true)
                {
                    var service = document.getElementById ("s2").value;
                }
                if(document.getElementById ("s1").checked == true)
                {
                    var service = document.getElementById ("s1").value;
                }
                
            }
         window.location.href = "http://localhost:8080/oms/web/app_dev.php/sms/validation/"+type+"/"+codeclient+"/"+compteproduit+"/"+service;
         }
    }
    
}

