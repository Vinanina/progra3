<?php

var_dump($_request);
$nombre = var_dump($_POST["texto"]);
//$nombre = var_dump($_request);

//echo $nombre;

// agregar  campoarchivo -> no se ingresa  el .txt

if($nombre  ==  "texto")
{
        echo "dsff";

}



/*
///agarrar el  texto del formulario  al presionar el boton guardar  recargar la pagina y leer el archivo
 $handle = fopen("fabrica.txt","w"); 
 fwrite($handle, $nombre);
 fclose($handle);


$gestor = fopen($nombre_fichero, "r");
            $contenido = fread($gestor, filesize($nombre_fichero));

//**/
?>

