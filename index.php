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

    function printCard() {
        echo "Name: " . $this->nome . '<br>';
        echo "Price: " . $this->prezzo . ' euro' . '<br>';
        echo "Product code: " . $this->codiceProdotto . '<br>';
    }
}

class Cibo extends Product {
    public $tipo;
    public $peso;

    function __construct($nome, $prezzo, $codiceProdotto, $tipo, $peso) {
        parent::__construct($nome, $prezzo, $codiceProdotto);
        $this->tipo = $tipo;
        $this->peso = $peso;
    }

    function printCard() {
        parent::printCard();
        echo "Type: " . $this->tipo . '<br>';
        echo "Weight: " . $this->peso;
    }
}

class Cucce extends Product {
    public $materiale;
    public $dimensione;

    function __construct($nome, $prezzo, $codiceProdotto, $materiale, $dimensione) {
        parent::__construct($nome, $prezzo, $codiceProdotto);
        $this->materiale = $materiale;
        $this->dimensione = $dimensione;
    }

    function printCard() {
        parent::printCard();
        echo "Material: " . $this->materiale . '<br>';
        echo "Size: " . $this->dimensione;
    }
}

class Giochi extends Product {
    public $materiale;
    public $forma;

    function __construct($nome, $prezzo, $codiceProdotto, $materiale, $forma) {
        parent::__construct($nome, $prezzo, $codiceProdotto);
        $this->materiale = $materiale;
        $this->forma = $forma;
    }

    function printCard() {
        parent::printCard();
        echo "Material: " . $this->materiale . '<br>';
        echo "Shape: " . $this->forma . '<br> <br>' ;
    }
}


// test di un prodotto non trovato
try {
    throw new ProdottoInesistente();
} catch (ProdottoInesistente $e) {
    echo "Error: " . $e->errorMessage();
} catch (Exception $e) {
    echo "Generic Error: " . $e->getMessage();
}

$gioco = new Giochi('Dinodog', '15', 'X8ESTV', 'Tessuto', 'Dino');
$gioco->printCard();
$cuccia = new Cucce('Dog House', '150', 'LELYLA', 'Wood', 'big');
$cuccia->printCard();

?>