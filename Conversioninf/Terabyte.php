<?php

require_once '../Conversioninf/Valor.php';
class Terabyte extends Valor{

    public function calcularGigabyteAterabyte(){

        return $this->getValor() * 1000;
    }

    public function calcularMegabyteAterabyte(){

        return $this->getValor() * 1000000;
    }
    public function calcularKilobyteAterabyte(){

        return $this->getValor() * 1000000000;
    }
    public function calcularByteAterabyte(){

        return $this->getValor() * 1000000000000;
    }

}
?>