function myFunction() {
        var nom = document.getElementById("input1").value;
        var prenom = document.getElementById("input2").value;
        var adresse = document.getElementById("input3").value;
        var telephone = document.getElementById("input4").value;
        var email = document.getElementById("input5").value;

        document.getElementById('input11').innerHTML = "";
        document.getElementById('input12').innerHTML ="";
        document.getElementById('input13').innerHTML="";
        document.getElementById('input14').innerHTML = "";
        document.getElementById('input15').innerHTML ="";



        
  // if(nom == ""){
  //     document.getElementById('input11').innerHTML = " *Ce champs est obligatoire"
  // }
  // if(prenom == ""){
  //     document.getElementById('input12').innerHTML = " *Ce champs est obligatoire"
  // }
  // if(adresse == ""){
  //     document.getElementById('input13').innerHTML = " *Ce champs est obligatoire"
  // }
  // if(telephone == ""){
  //     document.getElementById('input14').innerHTML = " *Ce champs est obligatoire"
  // }
  // if(email == ""){
  //     document.getElementById('input15').innerHTML = " *Ce champs est obligatoire"
  // }

if(nom == "" || prenom == "" || adresse == "" || telephone == "" || email == ""  ){
    alert("Veuillez remplir tous les champs");
    return false;
  }

  if(localStorage.getItem('NOM') == null ){
  localStorage.setItem('NOM' , '[]');
  }

  if(localStorage.getItem('PRENOM') == null ){
    localStorage.setItem('PRENOM' , '[]' );
  }
   if(localStorage.getItem('ADRESSE') == null ){
  localStorage.setItem('ADRESSE' , '[]' );
    }
  if(localStorage.getItem('TELEPHONE') == null ){
  localStorage.setItem('TELEPHONE' , '[]' );
   }
  if(localStorage.getItem('EMAIL') == null ) {
    localStorage.setItem('EMAIL' , '[]' );
    }




      var old_nom = JSON.parse(localStorage.getItem('NOM'));
      old_nom.push(nom);
      localStorage.setItem('NOM' , JSON.stringify(old_nom));
 
      // alert("your regestration is done thank you");

      var old_prenom = JSON.parse(localStorage.getItem('PRENOM'));
      old_prenom.push(prenom);  
      localStorage.setItem('PRENOM' , JSON.stringify(old_prenom));



    var old_adresse = JSON.parse(localStorage.getItem('ADRESSE'));
    old_adresse.push(adresse);      
    localStorage.setItem('ADRESSE' , JSON.stringify(old_adresse));



   var old_telephone = JSON.parse(localStorage.getItem('TELEPHONE'));
   old_telephone.push(telephone);
  localStorage.setItem('TELEPHONE' , JSON.stringify(old_telephone));


  var old_email = JSON.parse(localStorage.getItem('EMAIL'));
  old_email.push(email);   
 localStorage.setItem('EMAIL' , JSON.stringify(old_email));

 


 document.getElementById('input1').value="";
 document.getElementById('input2').value="";
 document.getElementById("input3").value="";
 document.getElementById("input4").value="";
 document.getElementById("input5").value="";


}






