<?php

// include __DIR__ . '/../models/genere.php';
include __DIR__ . '/../models/product.php';



// $arrayMovies = [

//     $movie1 = new Movie("Alien",117, 1979, "Ridley Scott", [ new Genere ("fantascienza"),new Genere ("thriller"),new Genere ("horror")], 'https://images.photowall.com/products/59754/alien.jpg?h=699&q=85'),
//     $movie2 = new Movie("Terminator", 137, 1984, "James Cameron", [ new Genere ("fantascienza"),new Genere ("thriller"),new Genere ("azione")], 'https://images.photowall.com/products/71005/terminator.jpg?h=699&q=85')
// ];


$prodotti = array(
    new CategoriaCani('https://www.foodpet.it/wp-content/uploads/2018/04/banters-adult-large-chicken-rice.jpg', 'Cibo per cani', 35),
    new CategoriaGatti('https://www.naturepetshop.it/wp-content/uploads/leonardo-fegato-400-gr-lattine.jpg', 'Cibo per gatti', 25),
    new CategoriaCani('https://www.peteat.it/3626-large_default/ciotola-da-viaggio-doppia-per-cani-kiwi-walker.jpg', 'Ciotola per cani', 20),
    new CategoriaCani('https://shop-cdn-m.mediazs.com/bilder/pettorina/per/gatti/trixie/xcat/xl/con/adesivi/e/guinzaglio/2/800/1_457257_xcat_katzengeschirr_mit_leine_und_sticker_fg_dsc1337_2.jpg', 'Guinzaglio per gatti', 25),
    
);

?>