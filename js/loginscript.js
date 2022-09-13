function login() {
    var un = document.getElementById("bruger").value;
    var pw = document.getElementById("kode").value;
   
    if ((un=='informatik') && (pw=='1234')) {
        window.open("content.html");
    }  else if ((un=='informatik')) {
        document.getElementById("result").innerHTML ="Forkert password";
    }  else if ((pw=='1234')) {
        document.getElementById("result").innerHTML ="Forkert brugernavn";
    }  else {
        document.getElementById("result").innerHTML = "Nej, bare nej!";
    }
}


