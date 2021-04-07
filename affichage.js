window.addEventListener('load', () => { 

    var nom = JSON.parse(localStorage.getItem('NOM'));
    var prenom = JSON.parse(localStorage.getItem('PRENOM'));
    var adresse = JSON.parse(localStorage.getItem('ADRESSE'));
    var telephone = JSON.parse(localStorage.getItem('TELEPHONE'));
    var email = JSON.parse(localStorage.getItem('EMAIL'));


    for(let i=0 ; i< nom.length ; i++ ){

    var table = document.getElementById("mytable");
    var row = table.insertRow ();
    var cell1 = row.insertCell ();
    var cell2 = row.insertCell ();
    var cell3 = row.insertCell ();
    var cell4 = row.insertCell ();
    var cell5 = row.insertCell ();
    cell1.innerHTML = document.getElementsByClassName('table').innerHTML = nom [i];
    cell2.innerHTML = document.getElementsByClassName('table').innerHTML = prenom [i];
    cell3.innerHTML = document.getElementsByClassName('table').innerHTML = adresse [i];
    cell4.innerHTML = document.getElementsByClassName('table').innerHTML = telephone [i];
    cell5.innerHTML = document.getElementsByClassName('table').innerHTML = email [i];




// for(let i=0 ; i< nom.length ; i++ ){

    // document.getElementById('table').innerHTML +="<table border=1px>"  
    // document.getElementById('table').innerHTML +="<tr><td>"+ nom [i]+"</td>";
    // document.getElementById('table').innerHTML +="<td>"+ prenom [i]+"</td>";
    // document.getElementById('table').innerHTML +="<td>"+ adresse [i]+"</td>";
    // document.getElementById('table').innerHTML +="<td>"+ telephone [i]+"</td>";
    // document.getElementById('table').innerHTML +="<td>"+ email [i]+"</td></tr>";
    // document.getElementById('table').innerHTML += "</table>";

}


            })