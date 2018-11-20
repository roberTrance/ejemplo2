const formularioContactos = document.querySelector('#usuario');

eventListeners();

function eventListeners() {
    formularioContactos.addEventListener('submit', leerFormulario);

}

function leerFormulario(e) {
    e.preventDefault();

    const   nombre = document.querySelector('#nombre').value,
            empresa = document.querySelector('#telefono').value,
            telefono = document.querySelector('#empresa').value;         
     if (nombre === '' || empresa === '' || telefono === ''){
        alert('Todos los campos son obligatoriaos','error');
        
     }else {
         const infoContacto = new FormData();
         infoContacto.append('nombre',nombre);
         infoContacto.append('telefono',empresa);
         infoContacto.append('empresa',telefono);
         infoContacto.append('accion',accion);

         console.log(...infoContacto);

         if(accion === 'crear'){

            insertarB(iDnfoContacto);


         } else {

         }
        
     }


}
function insertarBD(datos) {
    const xhr = new XMLHttpRequest();

    xhr.open('POST','sql-consultas/sql_registro.php', true);

    xhr.onload = function(){
        if(this.status === 200){
            console.log(JSON.parse( xhr.responseText) );

            const respuesta = JSON.parse( xhr.responseText);
            //console.log(respuesta.empresa) ;

        } 
    }

    xhr.send(datos)

}




