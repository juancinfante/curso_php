<?php 

// Array
$frutas = array("Manzana","Banana","Pera");

// Indices
$frutas2 = array("m"=>"Manzana","b"=>"Banana","p"=>"Pera");

print_r($frutas[2]);
print_r($frutas2["b"]);


for($indice=0;$indice<3;$indice++){
    echo $frutas[$indice]."<br>";
}

?>