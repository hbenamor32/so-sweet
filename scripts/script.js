// JavaScript Document
function scanTouche(evenement)
{
var reCarSpeciaux = /[\x00\x08\x0D\x03\x16\x18\x1A]/;
var reCarValides = /\d/;
var codeDecimal = codeTouche(evenement);
var car = String.fromCharCode(codeDecimal);
var autorisation = reCarValides.test(car) || reCarSpeciaux.test(car) || pressePapierNS6(evenement,car);
return autorisation;
}
function codeTouche(evenement)
{
for (prop in evenement)
{
if(prop == 'which') return(evenement.which);
}
return(evenement.keyCode);
}
function pressePapierNS6(evenement,touche)
{
var rePressePapierNS = /[cvxz]/i;
for (prop in evenement) if (prop == 'ctrlKey') isModifiers = true;
if (isModifiers) return evenement.ctrlKey && rePressePapierNS.test(touche);
else return false;
}
///////fin champs numerique/////////////
function writediv(id,texte)
{
document.getElementById(id).innerHTML = texte;
}
function file(fichier)
{
if(window.XMLHttpRequest) // FIREFOX
xhr_object = new XMLHttpRequest();
else if(window.ActiveXObject) // IE
xhr_object = new ActiveXObject("Microsoft.XMLHTTP");
else
return(false);
xhr_object.open("GET", fichier, false);
xhr_object.send(null);
if(xhr_object.readyState == 4) return(xhr_object.responseText);
else return(false);
}

/////////////////////////VerifContact////////////////////////////
function VerifContact()
{
	
var verif=true;
adresseEmail = document.formulairedecontact.email.value;
var place = adresseEmail.indexOf("@",1);
var point = adresseEmail.indexOf(".",place+1);

if(document.formulairedecontact.nom.value =="")
{ 
writediv('id_nom','<span class="erreur">Entrez votre Nom ou Pr&eacute;nom, svp !</span>');
document.formulairedecontact.nom.style.borderColor='red';
document.formulairedecontact.nom.style.color='red';
verif=false;
document.formulairedecontact.nom.focus();

}

else if ((place <=-1)||(adresseEmail.length <=2)||(point <= 1)||(document.formulairedecontact.email.value ==""))
{
writediv('id_nom','');

writediv('id_email','<span class="erreur">Entrez votre email, svp !</span>');
document.formulairedecontact.email.style.borderColor='red';
document.formulairedecontact.email.style.color='red';
verif=false;
document.formulairedecontact.email.focus();
}

else if(document.formulairedecontact.tel.value =="")
{ writediv('id_nom','');
writediv('id_email','');
writediv('id_tel','<span class="erreur">Entrez votre numero de t&eacute;l&eacute;phone, svp !</span>');
document.formulairedecontact.tel.style.borderColor='red';
document.formulairedecontact.tel.style.color='red';
verif=false;
document.formulairedecontact.tel.focus();

}
else if(document.formulairedecontact.adresse.value =="")
{ writediv('id_nom','');
writediv('id_email','');
writediv('id_tel','');
writediv('id_adresse','<span class="erreur">Entrez votre adresse, svp !</span>');
document.formulairedecontact.adresse.style.borderColor='red';
document.formulairedecontact.adresse.style.color='red';

verif=false;
document.formulairedecontact.adresse.focus();
}
else if(document.formulairedecontact.demande.value =="")
{
writediv('id_nom','');
writediv('id_tel','');
writediv('id_email','');
writediv('id_adresse','');
writediv('id_demande','<span class="erreur">Entrez votre demande, svp !</span>');
document.formulairedecontact.demande.style.borderColor='red';
document.formulairedecontact.demande.style.color='red';
verif=false;
document.formulairedecontact.demande.focus();
}

return verif;
}
/////////////////////////Fin VerifContact////////////////////////////
