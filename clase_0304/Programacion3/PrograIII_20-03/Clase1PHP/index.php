<?PHP   

//Primer Ejercio
/* Bloque comentado*/



$nombre = "Vanina";

echo $nombre."<br>";

echo "Hola Mundo".$nombre."<br>";


$Sumador = 1;
$Sumador2 =0;

while($Sumador < 1000)
{
    $Sumador = $Sumador2 + $Sumador;
    $Sumador2++;
}

echo "Cantidad de numeros sumados ". $Sumador2."<br>";
echo "Resultado de la suma ". $Sumador."<br>";

?>