<?php

require_once '../Conversioninf/Valor.php';
class Gigabyte extends Valor{

    public function calcularterabyteAGigabyte(){

        return $this->getValor() / 1000;
    }

    public function calcularMegabyteAGigabyte(){

        return $this->getValor() * 1000000;
    }
    public function calcularKilobyteAGigabyte(){

        return $this->getValor() * 1000000000;
    }
    public function calcularByteAGigabyte(){

        return $this->getValor() * 1000000000000;
    }

}
?>