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
       var valida = validaInfoGestion();
       if(valida)
       {

           var idHabitacion =  document.getElementById("idHabitacion").value;
           var idCamarera =  document.getElementById("idCamarera").value;
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
                + "&idHabitacion="+idHabitacion
                + "&idCamarera="+idCamarera
                // + "&tipoMov=2"
            );
        }
    }
 
    function validaInfoGestion()
    {
        if(document.getElementById("idHotel").value == '')
        {
            alert("Seleccione Hotel") ;  
            document.getElementById("idHotel").focus();
            return 0;
        }

        if(document.getElementById("idHabitacion").value == '')
        {
        alert("Seleccione Habitacion") ;  
        document.getElementById("idHabitacion").focus();
        return 0;
        }

        if(document.getElementById("idCamarera").value == '')
        {
            alert("Seleccione Camarera") ;  
            document.getElementById("idCamarera").focus();
            return 0;
        }
        
        return 1
    }


