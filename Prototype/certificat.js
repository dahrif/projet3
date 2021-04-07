window.addEventListener('load', () => { 

    var nom = JSON.parse(localStorage.getItem('nom'));
    var prenom = JSON.parse(localStorage.getItem('prenom'));

    for(let i=0 ; i< nom.length ; i++ )
    {document.getElementById('certif').innerHTML +="<body><div class='frame' ><div class='frame2' ><span class='title'>Certificate of Participation</span><br><br><span style='font-size:25px'><i>This is to certify that</i></span><br><br> <div class='name'><span style=' font-size:50px'>"+ nom [i]+"&nbsp;"+ prenom [i]+"</span></div><br/><br/><span style=font-size:25px><i>has participated in the event</i></span> <br/><br/> <span style='font-size:30px'>event name</span> <br/><br/>  <span style='font-size:25px'><i>dated</i></span><br>  <span style='font-size:30px'> 30 mars 2020</span> </div> </div></body>"+"<br>";
    

}



})
