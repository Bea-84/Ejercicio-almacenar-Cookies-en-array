
//Si pulso en el botón me captura los datos y me los muestra


$("#boton").click(function(){

    //El console es para comprobar que todo va bien
    //console.log("Hola");

    $.get("index2.php",function(data){

          $("#contenido ul").html(data);

    });


});


/*

$("#reset").click(function(){

    $.get("deleteCookie.php"){

            $("#recuento").html("");  Aquí no le paso datos xq es para eliminar la cookie

    });
  

});

*/

//setcookie("registros","",time(),"/") time entre parentesis destruye la cookie en 0 segundos(resetear la cookie)

/*

$("#cerrar").click(function(){


   $.get(logout.php){

    $("#frase").html(""); Para cerrar sesión

   });

});

*/