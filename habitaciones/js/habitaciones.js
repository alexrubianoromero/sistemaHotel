 function formuNuevaHabitacion(){
        const http=new XMLHttpRequest();
        const url = '../habitaciones/habitaciones.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("modalBodyHabitacion").innerHTML = this.responseText;
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=formuNuevaHabitacion"
        // + "&id="+id
        // + "&tipoMov=2"
        );
    }
 function muestreListadoCheckList(){
        const http=new XMLHttpRequest();
        const url = '../habitaciones/habitaciones.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("div_muestre_checklist").innerHTML = this.responseText;
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=muestreListadoCheckList"
        // + "&id="+id
        // + "&tipoMov=2"
        );
    }

 function traerHabitacionesXIdHotel(){
         var idHotel =  document.getElementById("idHotel").value;
        const http=new XMLHttpRequest();
        const url = '../habitaciones/habitaciones.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("div_ahabitaciones_existentes").innerHTML = this.responseText;
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=traerHabitacionesXIdHotel"
        + "&idHotel="+idHotel
        );
    }
 function selectHabitacionesXIdHotel(){
         var idHotel =  document.getElementById("idHotel").value;
        const http=new XMLHttpRequest();
        const url = '../habitaciones/habitaciones.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("idHabitacion").innerHTML = this.responseText;
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=selectHabitacionesXIdHotel"
        + "&idHotel="+idHotel
        );
    }

 function grabarHabitacion()
 {
    var valida = validainfoHabitacion();
    if(valida == 1)
    {
        var idHotel =  document.getElementById("idHotel").value;
        var descripcion =  document.getElementById("descripcion").value;
        
        const http=new XMLHttpRequest();
        const url = '../habitaciones/habitaciones.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("modalBodyHabitacion").innerHTML = this.responseText;
            }
        };
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=grabarHabitacion"
            + "&idHotel="+idHotel
            + "&descripcion="+descripcion
        );
    }
}



function validainfoHabitacion()
{
    if(document.getElementById("idHotel").value == '')
    {
       alert("Selecciona Hotel ") ;  
       document.getElementById("idHotel").focus();
       return 0;
    }
    if(document.getElementById("descripcion").value == '')
    {
       alert("Digite Habitacion ") ;  
       document.getElementById("descripcion").focus();
       return 0;
    }
    return 1;
}