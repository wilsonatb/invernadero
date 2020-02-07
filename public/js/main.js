const botones = document.querySelectorAll(".bEliminar");// es un arreglo de todos los elementos que tiene la calse elminar

botones.forEach(boton => {

    boton.addEventListener("click", function(){
        const id = this.dataset.id;
        
        const confirm = window.confirm("¿Deseas eliminar al usuario " + id + "?");

        if(confirm){
            //solicitud AJAx
            httpRequest("http://invernaderounexpo.dx.am/admin/eliminarUsuario/" + id, function(){
                //console.log(this.responseText);
                document.querySelector("#respuesta").innerHTML = this.responseText;

                const tbody = document.querySelector("#tbody-usuarios");
                const fila = document.querySelector("#fila-" + id);

                tbody.removeChild(fila);
            });

        }
    })
})

function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();

    http.onreadystatechange = function(){
        if(this.readyState ==4 && this.status == 200){
            callback.apply(http);
        }
    }
}