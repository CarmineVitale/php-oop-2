<?php
include_once __DIR__ . '/Prodotto.php';

class Smartphone extends Prodotto {
    public $memoria;
    public $colore;
    
    public function __construct($_codice, $_tipo, $_marca, $_modello, $_memoria, $_colore ) {
        parent::__construct($_codice, $_tipo, $_marca, $_modello);
        $this->memoria = $_memoria;
        $this->colore = $_colore;
    
    }
    // public function print() {
    //     parent::print();
    // }
    
}
$smartphone = new Smartphone('B5789', 'Smartphone', 'Apple', 'iPhone 11 Pro Max','64 GB', 'Grigio siderale');

?>