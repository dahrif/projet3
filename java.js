function myFunction() {
        var text1 = document.getElementById("input1").value;
        var text2 = document.getElementById("input2").value;
        var text3 = document.getElementById("input3").value;
        var text4 = document.getElementById("input4").value;
        var text5 = document.getElementById("input5").value;
        document.getElementById("result").innerHTML += "NOM:   " +text1+"<br>" + "PRENOM:   " 
        +text2+"<br>" + "ADRESSE:   " +text3+"<br>" +"telephone:   " +text4+"<br>" +"EMAIL:   " 
        +text5+"<hr>";

        document.getElementById("result").style.display = 'block';
      
      document.getElementById("result1").innerHTML = "<br><a id='but' href='javascript:window.print()' style='width: 80%; border-radius: 20px; padding: 10px; background-color: #000; font-size: 20px; font-weight: bold; margin-top: 10px; text-color:white; cursor: pointer; text-decoration: none; color: #fff;' >imprimer</a> <br>  ";

    }

// function storageData(){

//     if(localStorage.getItem('nom') == null ){
//       localStorage.setItem('nom' , '[]');
//       }
  
//       if(localStorage.getItem('prenom') == null ){
//         localStorage.setItem('prenom' , '[]' );
//     }
//        if(localStorage.getItem('adresse') == null ){
//       localStorage.setItem('adresse' , '[]' );
//         }
//       if(localStorage.getItem('email') == null ){
//       localStorage.setItem('email' , '[]' );
//        }
//        if(localStorage.getItem('telephone') == null ) {
//         localStorage.setItem('telephone' , '[]' );
//           }
  
  
  
  
//           var old_name = JSON.parse(localStorage.getItem('nom'));
//           old_nom.push(nom);
//           localStorage.setItem('nom' , JSON.stringify(old_nom));
     
//           // alert("your regestration is done thank you");
  
//           var old_prenom = JSON.parse(localStorage.getItem('prenom'));
//           old_prenom.push(prenom);  
//           localStorage.setItem('prenom' , JSON.stringify(old_prenom));
  
  
  
//         var old_adresse = JSON.parse(localStorage.getItem('adresse'));
//         old_adress.push(adresse);      
//         localStorage.setItem('adresse' , JSON.stringify(old_adresse));
  
  
  
//        var old_telephone = JSON.parse(localStorage.getItem('telephone'));
//        old_telephone.push(telephone);
//       localStorage.setItem('telephone' , JSON.stringify(old_telephone));
  
  
//       var old_email = JSON.parse(localStorage.getItem('email'));
//       old_email.push(email);   
//      localStorage.setItem('email' , JSON.stringify(old_email));
  
     
  
  
//      document.getElementById('input1').value="";
//      document.getElementById('input2').value="";
//      document.getElementById("input3").value="";
//      document.getElementById("input4").value="";
//      document.getElementById("input5").value="";
  

//     }




// let local = localStorage;
// setData () => {

// }




