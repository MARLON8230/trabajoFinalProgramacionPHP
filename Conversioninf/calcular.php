<?php

if(isset($_POST["btncalcular"])){

require_once '../Conversioninf/Terabyte.php';
require_once '../Conversioninf/Gigabyte.php';
require_once '../Conversioninf/Megabyte.php';
require_once '../Conversioninf/Kilobyte.php';
 
$terabyte = new Terabyte();
$gigabyte = new Gigabyte();
$megabyte = new Megabyte();
$kilobyte = new Kilobyte();

$valor = $_POST["txtvalor"];
$opcion = $_POST["medidas"];
$tipomedida = $_POST["selmedidas"];

switch($opcion){

    case "terabyte":
        $terabyte->setValor($valor);

    switch($tipomedida){

        case "giga":
        
            echo " la conversion de " . $valor . " tera a giga es: " . $terabyte->calcularGigabyteAterabyte();    
    break;

        case "mega":
        echo "la conversion de " . $valor . "  tera a mega es: " . $terabyte->calcularMegabyteAterabyte();

    break;

        case "kilo":
        echo "la conversion de " . $valor . "  tera a kilo es: " . $terabyte->calcularKilobyteAterabyte();

    break;

    case "byte":
    echo "la conversion de " . $valor . "  tera a byte es: " . $terabyte->calcularByteAterabyte();

break;

    }
break;
}

switch($opcion){

    case "gigabyte":
        $gigabyte->setValor($valor);

    switch($tipomedida){

        case "tera":
        
            echo " la conversion de " . $valor . " giga a tera es: " . $gigabyte->calcularterabyteAGigabyte();    
    break;

        case "mega":
        echo "la conversion de " . $valor . "  giga a mega es: " . $gigabyte->calcularMegabyteAGigabyte();

    break;

        case "kilo":
        echo "la conversion de " . $valor . "  giga a kilo es: " . $gigabyte->calcularKilobyteAGigabyte();

    break;

    case "byte":
    echo "la conversion de " . $valor . "  giga a byte es: " . $gigabyte->calcularByteAGigabyte();

break;

    }
break;
}

switch($opcion){

    case "megabyte":
        $megabyte->setValor($valor);

    switch($tipomedida){

        case "tera":
        
            echo " la conversion de " . $valor . " mega a tera es: " . $megabyte->calcularterabyteAMegabyte();    
    break;

        case "giga":
        echo "la conversion de " . $valor . "  mega a giga es: " . $megabyte->calcularGigabyteAMegabyte();

    break;

        case "kilo":
        echo "la conversion de " . $valor . "  mega a kilo es: " . $megabyte->calcularKilobyteAMegabyte();

    break;

    case "byte":
    echo "la conversion de " . $valor . "  mega a byte es: " . $megabyte->calcularByteAMegabyte();

break;

    }
break;
}



}else{
    echo "acceso no permitido";
    
}




?>