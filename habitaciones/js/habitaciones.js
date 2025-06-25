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
 function traerHabitacionesXIdHotel(){
         var idHotel =  document.getElementById("idHotel").value;
        const http=new XMLHttpRequest();
        const url = '../habitaciones/habitaciones.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("modalBodyHabitacion").innerHTML = this.responseText;
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=traerHabitacionesXIdHotel"
        + "&idHotel="+idHotel
        // + "&tipoMov=2"
        );
    }
