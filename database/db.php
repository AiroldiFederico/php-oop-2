<?php


include __DIR__ . '/../models/product.php';

try {

    $prodotti = array(
        new ProdottoCani('https://www.foodpet.it/wp-content/uploads/2018/04/banters-adult-large-chicken-rice.jpg', 'Cibo per cani', 35),
        new ProdottoGatti('https://www.naturepetshop.it/wp-content/uploads/leonardo-fegato-400-gr-lattine.jpg', 'Cibo per gatti', 25, false),
        new ProdottoCani('https://www.peteat.it/3626-large_default/ciotola-da-viaggio-doppia-per-cani-kiwi-walker.jpg', 'Ciotola per cani', 20, false),
        new ProdottoGatti('https://shop-cdn-m.mediazs.com/bilder/pettorina/per/gatti/trixie/xcat/xl/con/adesivi/e/guinzaglio/2/800/1_457257_xcat_katzengeschirr_mit_leine_und_sticker_fg_dsc1337_2.jpg', 'Guinzaglio per gatti', 25),
        
    );

} catch (Exception $e) {
    echo 'Errore durante la creazione del prodotto: ' . $e->getMessage();
}

?>