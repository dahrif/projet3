window.addEventListener('load', () => { 

    var nom = JSON.parse(localStorage.getItem('NOM'));
    var prenom = JSON.parse(localStorage.getItem('PRENOM'));

    for(let i=0 ; i< nom.length ; i++ )
    {document.getElementById('certif').innerHTML +="<body><div class='container'><div class='logo'>Solicode</div><div class='marquee'>Certificate of Completion</div><div class='assignment'>This certificate is presented to</div><div class='person'>"+nom +prenom +"</div><div class='reason'>For deftly defying the laws of gravity<br/>and flying high</div><div><img src='Stamp.svg' class='stamp'></div></div></body>"+"<br>";
    

}



})




