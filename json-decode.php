<?php 

$jsonContenido = '[
    {"nombre":"Juan", "apellido":"infante"}, 
    {"nombre":"Josias", "apellido":"llugdar"}, 
    {"nombre":"Nazareno", "apellido":"suarez"}
]';

$resultado = json_decode($jsonContenido);

print_r($resultado);
echo "<br/>";

foreach($resultado as $persona){
    echo ($persona->nombre)." ".($persona->apellido)."<br/>";
}

?>