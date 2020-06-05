<?php
include_once __DIR__ . '/Prodotto.php';

class Computer extends Prodotto {
    public $ram;
    public $display;

    public function __construct($_ram, $_display,$_codice, $_tipo, $_marca, $_modello) {
        parent::__construct($_codice, $_tipo, $_marca, $_modello);
        $this->ram = $_ram;
        $this->display = $_display;
    }
    public function print() {
        $info = parent::print();
        return $info . ' ' . $this->ram . ' ' . $this->display;
    }
    // public function dettagli() {
    //     return $this->print() . ' ' . $this->ram;
    // }
}
$computer = new Computer('16 GB', '27 pollici', 'B5789', 'Computer', 'Apple', 'iMac');


?>