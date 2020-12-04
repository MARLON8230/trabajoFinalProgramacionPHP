<?php

require_once '../Conversioninf/Valor.php';
class Megabyte extends Valor{

    public function calcularterabyteAMegabyte(){

        return $this->getValor() / 1000000;
    }

    public function calcularGigabyteAMegabyte(){

        return $this->getValor() / 1000;
    }
    public function calcularKilobyteAMegabyte(){

        return $this->getValor() * 1000;
    }
    public function calcularByteAMegabyte(){

        return $this->getValor() * 1000000;
    }

}
?>