<?php






class Movie {

    #variabili
    public $titolo;
    public $durata;
    public $anno;
    public $regista;
    public $genere;
    public $poster;
    public $prezzoBiglietto;


    #costruttore
    function __construct(String $titolo, Int $durata, Int $anno, String $regista, Array $genere, String $poster )
    {   
        $this->titolo = $titolo;
        $this->durata = $durata;
        $this->anno = $anno;
        $this->regista = $regista;
        $this->genere = $genere;
        $this->poster = $poster;
        $this->setPrezzo($durata);
    }

    #metodo
    public function setPrezzo($durata){
        if( $durata > 120 ){
            $this->prezzoBiglietto = '12$'; 
        } else {
            $this->prezzoBiglietto = '9$';
        }
    }

    public function getPrezzo() {
        return $this->prezzoBiglietto;
    }

}







?>