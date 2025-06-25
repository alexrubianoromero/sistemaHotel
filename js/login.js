function verificarCredenciales()
{
    var user =  document.getElementById("usuario").value;
    var clave =  document.getElementById("clave").value;
    // alert(user+clave);
    const http=new XMLHttpRequest();
    const url = 'index.php';
    // alert('Anterior'+ placaAnterior + '  nueva '+ placaNueva )
    // alert('logueooooo');
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
              var  resp = JSON.parse(this.responseText);
            //   alert(resp.valida);
              if(resp.valida == 1){
                  window.location.href = "https://www.alexrubiano.com/sistemahotel/dashboard/dashboard.php";
                }else {
                  window.location.href = "https://www.alexrubiano.com/sistemahotel/index.php";
                    
              }
            // document.getElementById("div_principal_ingresotecnicos").innerHTML = this.responseText;
        }
    };
    http.open("POST",url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send("opcion=verificarCredenciales"
    + "&user="+user
    + "&clave="+clave
   
    );
}