<?php





trait DisponibilitaProdotto {
    public $disponibile = true;

    public function setDisponibile($disponibile) {
        $this->disponibile = $disponibile;
    }

    public function isDisponibile() {
        return $this->disponibile;
    }
}

// Classe base per i prodotti
class Prodotto {
    public $immagine;
    public $titolo;
    public $prezzo;
    public $categoria;

    public function __construct($immagine, $titolo, $prezzo, $categoria) {
        $this->immagine = $immagine;
        $this->titolo = $titolo;

        //controllo se il prezzo è inserito come numero intero
        if (!is_int($prezzo)) {
            throw new Exception('Il prezzo deve essere un numero intero.');
        }

        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
    }

    public function getCategoria() {
        return $this->categoria;
    }
}



class ProdottoCani extends Prodotto {

    use DisponibilitaProdotto;

    public function __construct($immagine, $titolo, $prezzo,  $disponibile = true) {
        parent::__construct($immagine, $titolo, $prezzo, 'Cani', $disponibile);
        $this->setDisponibile($disponibile);
    }

    public function getIcona() {
        return '<i class="fa-solid fa-dog"></i>';
    }
}



class ProdottoGatti extends Prodotto {

    use DisponibilitaProdotto;

    public function __construct($immagine, $titolo, $prezzo,  $disponibile = true) {
        parent::__construct($immagine, $titolo, $prezzo, 'Gatti', $disponibile);
        $this->setDisponibile($disponibile);
    }

    public function getIcona() {
        return '<i class="fa-solid fa-cat"></i>';
    }
}







?>