<?php 

class Categoria {
    private $remedio;
    private $cosmeticos;
    private $higiene;


    public function __construct($remedio, $cosmeticos, $higiene) {
        $this->remedio = $remedio;
        $this->cosmeticos = $cosmeticos;
        $this->higiene = $higiene;
    }

    public function getRemedio() {
        return $this->remedio;
    }

    public function getCosmetico() {
        return $this->cosmeticos;
    }

    public function getHigiene() {
        return $this->higiene;
    }
}