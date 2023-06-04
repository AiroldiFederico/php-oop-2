<?php

// include __DIR__ . '/../models/genere.php';
include __DIR__ . '/../models/product.php';



// $arrayMovies = [

//     $movie1 = new Movie("Alien",117, 1979, "Ridley Scott", [ new Genere ("fantascienza"),new Genere ("thriller"),new Genere ("horror")], 'https://images.photowall.com/products/59754/alien.jpg?h=699&q=85'),
//     $movie2 = new Movie("Terminator", 137, 1984, "James Cameron", [ new Genere ("fantascienza"),new Genere ("thriller"),new Genere ("azione")], 'https://images.photowall.com/products/71005/terminator.jpg?h=699&q=85')
// ];


$prodotti = array(
    new CategoriaCani('immagine1.jpg', 'Prodotto 1', 10),
    new CategoriaGatti('immagine2.jpg', 'Prodotto 2', 15),
    new CategoriaCani('immagine3.jpg', 'Prodotto 3', 20),
    new CategoriaCani('immagine3.jpg', 'Prodotto 4', 25),
    
);

?>