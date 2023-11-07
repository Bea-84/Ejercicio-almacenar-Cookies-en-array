<!--Para probar conexión escribimos algo para ver si se muestra antes de poner código-->

<?php

//creo array
$registros=array();
//tengo una variable,la que sea, en este caso es date
$fecha_actual=date("Y-m-d (H:i:s)");
//subo al array los valores almacenados en las siguientes variables
array_push($registros,$fecha_actual);

//si la cookie existe la añado al array con el merge y la decodifico
if(isset($_COOKIE['registros'])){

$registros=array_merge($registros,json_decode($_COOKIE['registros']));

}

//la siguiente línea sirve para actualizar
//guardo mi variable y la codifico de nuevo
setcookie("registros",json_encode($registros),time()+(86400*30),"/");


?>


<?php

//Parte mostrar contenido

foreach($registros as $r){ ?>
    

<li>Su registro de click es:<?=$r ?></li>


<?php     }?>