




function Sumar() {
    var n1 = document.getElementById('no1').value;
    var n2 = document.getElementById('no2').value;
    var cutt = "cut";
    //var suma = parseInt(n1) + parseInt(n2);

    if(n1 === "" || n2 === ""){
        alert("Campos vacios")

    }else{
        if( n1 === cutt && n2 === cutt){
            var body = document.body;
            var h1 = document.createElement("h1");
            h1.innerHTML = ("El regultado es correcto");
            body.appendChild(h1);

        }else{
            alert("Incorrecto")
        }
        
    }   

}