<?php

class ProdottoInesistente extends Exception {
    public function errorMessage() {
        return "Product not found. <br> <br>";
    }
}

class Product {
    public $nome;
    public $prezzo;
    public $codiceProdotto;

    function __construct($nome, $prezzo, $codiceProdotto) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->codiceProdotto = $codiceProdotto;
    }

}
?>