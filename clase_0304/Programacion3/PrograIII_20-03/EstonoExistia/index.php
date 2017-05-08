<?PHP 
echo "Hola Mundo"."<br>";


// ej. 6
// 1_constructor
//2_[0]
//3_Push()


$Array = array(
    rand(0,100),
    rand(0,100),
    rand(0,100),
    rand(0,100),
    rand(0,100),
);

$Sumador;

for ($i=0 ; $i < count($Array) ; $i++)  { 
    
    $Sumador =+ $Array[$i]; 
}

$Promedio = $Sumador / count($Array); 
echo "Suma de Arrays: ".$Sumador."<br>";
echo "Promedio de Arrays: ".$Promedio."<br>";



if($Promedio > 6)
{ echo "El promedio es mayor a 6 : ".$Promedio. "<br>";}
if($Promedio < 6)
{echo "El promedio es menor a 6 : ".$Promedio. "<br>";}
if($Promedio == 6)
{echo "El promedio es igual a 6 : ".$Promedio. "<br>";}


echo "Con []"."<br>";

$Array2 = array();

for ($i=0; $i < 5 ; $i++) 
{ 
    $Array2[$i] = rand(0,100);    
}

$Sumador2;

for ($i=0 ; $i < count($Array2) ; $i++)  { 
    
    $Sumador2 =+ $Array2[$i]; 
}

$Promedio2 = $Sumador2 / count($Array2); 
echo "Suma2 de Arrays: ".$Sumador2."<br>";
echo "Promedio2 de Arrays: ".$Promedio2."<br>";


switch($Promedio2)
{ case $Promedio2 > 6:
        echo "El promedio es mayor a 6 : ".$Promedio2. "<br>";
        break;
  case $Promedio2 < 6:
        echo "El promedio es menor a 6 : ".$Promedio2. "<br>";
        break;      
  case $Promedio2 == 6:
        echo "El promedio es igual a 6 : ".$Promedio2. "<br>";
        break;
}

echo "<br>";
//var_dump($Array);
$Array3 = array();

array_push($Array3, rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100));


$Promedio3 = $Sumador3 / count($Array3); 
echo "Suma2 de Arrays: ".$Sumador3."<br>";
echo "Promedio2 de Arrays: ".$Promedio3."<br>";


switch($Promedio3)
{ case $Promedio3 > 6:
        echo "El promedio es mayor a 6 : ".$Promedio3. "<br>";
        break;
  case $Promedio3 < 6:
        echo "El promedio es menor a 6 : ".$Promedio3. "<br>";
        break;      
  case $Promedio3 == 6:
        echo "El promedio es igual a 6 : ".$Promedio3. "<br>";
        break;
}


?>