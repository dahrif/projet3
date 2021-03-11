function myFunction() {
        var text1 = document.getElementById("input1").value;
        var text2 = document.getElementById("input2").value;
        var text3 = document.getElementById("input3").value;
        var text4 = document.getElementById("input4").value;
        var text5 = document.getElementById("input5").value;
        document.getElementById("result").innerHTML += "NOM:   " +text1+"<br>" + "PRENOM:   " 
        +text2+"<br>" + "ADRESSE:   " +text3+"<br>" +"TELEPHONE:   " +text4+"<br>" +"EMAIL:   " 
        +text5+"<hr>";

        document.getElementById("result").style.display = 'block';
      
      document.getElementById("result1").innerHTML = "<br><a id='but' href='javascript:window.print()' style='width: 80%; border-radius: 20px; padding: 10px; background-color: grey; font-size: 20px; font-weight: bold; margin-top: 10px; text-color:black; cursor: pointer; text-decoration: none; color: #000;' >imprimer</a> <br>  ";

    }
