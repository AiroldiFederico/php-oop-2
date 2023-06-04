<?php






// class Movie {

//     #variabili
//     public $titolo;
//     public $durata;
//     public $anno;
//     public $regista;
//     public $genere;
//     public $poster;
//     public $prezzoBiglietto;


//     #costruttore
//     function __construct(String $titolo, Int $durata, Int $anno, String $regista, Array $genere, String $poster )
//     {   
//         $this->titolo = $titolo;
//         $this->durata = $durata;
//         $this->anno = $anno;
//         $this->regista = $regista;
//         $this->genere = $genere;
//         $this->poster = $poster;
//         $this->setPrezzo($durata);
//     }

//     #metodo
//     public function setPrezzo($durata){
//         if( $durata > 120 ){
//             $this->prezzoBiglietto = '12$'; 
//         } else {
//             $this->prezzoBiglietto = '9$';
//         }
//     }

//     public function getPrezzo() {
//         return $this->prezzoBiglietto;
//     }

// }

// Classe base per i prodotti
class Prodotto {
    public $immagine;
    public $titolo;
    public $prezzo;
    public $categoria;

    public function __construct($immagine, $titolo, $prezzo, $categoria) {
        $this->immagine = $immagine;
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
    }

    public function getCategoria() {
        return $this->categoria;
    }
}



class CategoriaCani extends Prodotto {
    public function __construct($immagine, $titolo, $prezzo) {
        parent::__construct($immagine, $titolo, $prezzo, 'Cani');
    }

    public function getIcona() {
        return '<i class="fa-solid fa-dog"></i>';
    }
}



class CategoriaGatti extends Prodotto {
    public function __construct($immagine, $titolo, $prezzo) {
        parent::__construct($immagine, $titolo, $prezzo, 'Gatti');
    }

    public function getIcona() {
        return '<i class="fa-solid fa-cat"></i>';
    }
}







?>