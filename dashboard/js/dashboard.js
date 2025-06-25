// function menuOpciones()
// {

//     alert('menu opciones ');
// }

//  function menuOpciones(){
//         const http=new XMLHttpRequest();
//         const url = '../opciones/opciones.php';
//         http.onreadystatechange = function(){
//             if(this.readyState == 4 && this.status ==200){
//                 document.getElementById("columncentral").innerHTML = this.responseText;
//             }
//         };
        
//         http.open("POST",url);
//         http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//         http.send("opcion=menuOpciones"
//         );
//     }
 function mostrarGestiones(){
        const http=new XMLHttpRequest();
         const url = '../gestiones/gestiones.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("div_resultados_dashboard").innerHTML = this.responseText;
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=mostrarGestiones"
        // + "&id="+id
        // + "&tipoMov=2"
        );
    }
 function formuNuevaGestion(){
        const http=new XMLHttpRequest();
        const url = '../gestiones/gestiones.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("modalBodyGestion").innerHTML = this.responseText;
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=formuNuevaGestion"
        // + "&id="+id
        // + "&tipoMov=2"
        );
    }

 function grabarGestion(){
        var observaciones =  document.getElementById("txtobservacion").value;
        // alert(observaciones);
        const http=new XMLHttpRequest();
        const url = '../gestiones/gestiones.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("modalBodyGestion").innerHTML = this.responseText;
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=grabarGestion"
        + "&observaciones="+observaciones
        // + "&tipoMov=2"
        );
    }


