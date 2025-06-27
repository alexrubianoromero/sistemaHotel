

function actualizarestadoItemgestion(elemento)
{
      const nombre = elemento.name;
      if(elemento.checked)
      { var valor =1 }else{var valor =0 }
        const http=new XMLHttpRequest();
        const url = '../gestiones/gestiones.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                // document.getElementById("div_muestre_checklist").innerHTML = this.responseText;
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=actualizarestadoItemgestion"
        + "&idItemGestion="+nombre
        + "&valor="+valor
        );
}

 function muestreInfoGestion(idGestion){
        const http=new XMLHttpRequest();
        const url = '../gestiones/gestiones.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("modalBodyGestion").innerHTML = this.responseText;
            }
        };
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=muestreInfoGestion"
        + "&idGestion="+idGestion
        );
    }
 
