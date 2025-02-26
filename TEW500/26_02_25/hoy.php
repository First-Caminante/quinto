<?php

$a = 5;
$b = 4;
$c = 3;


# declaracion de funciones ······································································

function suma($a,$b){
 $s = $a+$b;
 
 echo "la suma  de ".$a." + ".$b." es :".$s;
}
function sumatres($x,$y,$z){
    return $x+$y+$z;
}

#::::::::::::::::::::::::::::$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
#Ejecucion................................



suma($a,$b);

echo "<hr>";

$resp = sumatres($a,$b,$c);

echo "la suma  de ".$a." + ".$b." + ".$c." es :".sumatres($a,$b,$c);

echo "<br>";

echo "\nla suma  de ".$a." + ".$b." + ".$c." es :".$resp;

#arreglooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooos


echo "<h3>Arreglos </h3>";
##arreglos unidimensionales


$arr = [1,2,3,4,5,6];
$persona = ["nombre"=>"juan","edad" => 22,"ciudad" => "la paz"];

print_r($arr);

echo "<hr>";

print_r($persona);

echo "<h3>indexados</h3>";


$animales = ["perro","lobo","asno"];

echo $animales[2];

// declaraion 2da forma 

//$mascotas = arr(1,2,3);

//3ra forma declaracion de array


$tercera = [
    0 => 1,
    1 => 2,
    2 => 3
];

print_r($tercera);
echo "<hr>";

echo "<h3>Asociativos</h3>";

$numeros = ["uno"=>1,"dos" => 2,"tres" => 3];

print_r($numeros);




//////////////////////4ta forma con estructuras


class Vector{
    public $dato1 = 40;
    public $dato2 = 16;
    public $dato3 = 8;
    

}
$vec = new Vector();

echo "<hr>";


echo "<h3> USANDO CLASES </h3>";
echo $vec->dato2;

$matriz = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

echo "<hr>";

echo $matriz[0][0];


$lista = array(
    array("hola","bro","como"),
    array("hocvla","asdf","ccvcvomo"),
    array("hofdfla","brdfdfo","wey")
);

echo "<hr>";
echo "<h3> var_dump(lista); </h3>";

var_dump($lista);

echo "<hr>";

var_dump($lista[2][2]);



echo "<hr>";
echo "<h3>USANDO PRINT_R</h3>";

print_r($lista);

////// asociados con constructor con array 

$datospersona = array(
    "usuario"=>array("nombre"=>"juan",
                    "apellido"=>"caminante",
                    "ocupacion"=>"etc"
                ),
    "usuario2"=>array("nombre"=>"hay",
                    "apellido"=>"wey",
                    "ocupacion"=>"nose"
                ),  
    "usuario3"=>array("nombre"=>"two",
                     "apellido"=>"mr",
                     "ocupacion"=>"farinheit"
                )    

);


// usamos forech



echo "<hr> USAMOS FOR EACH";
echo "<h3>FOREACH</h3>";

foreach($datospersona as $usuario => $registro){
    echo "<br>".$usuario."<br>";
    foreach($registro as $clave => $dato){
        echo $clave."==>".$dato."<br>";
    }

}



?>