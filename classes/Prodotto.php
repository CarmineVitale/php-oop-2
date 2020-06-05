<?php 
class Prodotto {
    public $codice;
    public $tipo;
    public $marca;
    public $modello;

    public function __construct($_codice, $_tipo, $_marca, $_modello) {
        $this->codice = $_codice;
        $this->tipo = $_tipo;
        $this->marca = $_marca;
        $this->modello = $_modello;
    }
    public function print() {
        return $this->tipo . ' ' . $this->marca . ' ' . $this->modello;
    }
}
$prodotto = new Prodotto('ciao','ciao','ciao','ciao')


?>