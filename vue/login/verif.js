function surligne(champ, erreur)
{
   if(erreur)
   {
      champ.style.backgroundColor = "#fba";
   }
   else
   {
      champ.style.backgroundColor = "";
   }
}
function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifMotDePasse(champ) 
{	
    var pwd1 = document.getElementById('creerMotDePasse').value;
    var pwd2 = champ.value;      
    if (pwd1 != pwd2)
    {
     	surligne(champ, true);
	 	return false;
   	}
   	else
   	{
      	surligne(champ, false);
	  	return true;
   	}
 
}
function verifForm(f)
{
   var mailOk = verifMail(f.creerEmail);
   var motDePasseOk = verifMotDePasse(f.creerConfirmationMotDePasse);
      
   if(mailOk && motDePasseOk)
   {
      return true;
   }
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}