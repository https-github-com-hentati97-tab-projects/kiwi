function verifier(champ)
{
  if(champ.value.length < 2 || champ.value.length > 25)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
function verifForm(f)
{
   var IDOk = verifier(f.id);
   var nomOk = verifier(f.nom);
   var qtOk = verifier(f.qt);
   var prixOk = verifier(f.prix);
   var catOK = verifier(f.categorie);
   
   if(nomOk  && IDOk && qtOk && prixOk)
      {
      	alert("shiha");
      	return true;
      }
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}

function verifform()
{
   let teste=true;
   let nom, id, qt,categorie;
   nom=clientf.nom.value;
   if(nom.length < 2 || nom.length > 25)
   {
         //alert("faux");
         teste=false;
    //  surligne(champ, true);
      
   }

  


   if (teste===false)
      alert("Verifiez vos informations.");

}