<?php

require_once '../Conversioninf/Valor.php';
class Kilobyte extends Valor{

    public function calcularterabyteAKilobyte(){

        return $this->getValor() / 1000000000;
    }

    public function calcularGigabyteAKilobyte(){

        return $this->getValor() / 1000000;
    }
    public function calcularMegabyteAKilobyte(){

        return $this->getValor() / 1000;
    }
    public function calcularByteAKilobyte(){

        return $this->getValor() * 1000;
    }

}
?>