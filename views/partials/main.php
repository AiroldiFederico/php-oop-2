<?php

include __DIR__ . '/../../database/db.php';


?>

<main class="col-8 m-auto d-flex flex-column align-items-center h-100 ">

    <h1 class="text-center mt-4">PET SHOP</h1>


    <div class="d-flex mt-4 gap-2 ">

        <?php foreach($prodotti as $elem) { ?>

            <div class="card" style="width: 18rem;">
                <img src="<?php echo $elem->immagine ?>" class="card-img-top" alt="...">
                <div class="card-body position-relative">

                    <!-- NOME PRODOTTO -->
                    <h5 class="card-title"><?php echo $elem->titolo ?></h5>

                    <!-- DISPONIBILITÀ PRODOTTO -->
                    <?php if ($elem->isDisponibile()) { ?>
                        <p class="text-success">Prodotto disponibile</p>
                    <?php } else { ?>
                        <p class="text-danger">Prodotto non disponibile</p>
                    <?php } ?>

                    <!-- PREZZO PRODOTTO -->
                    <p class="card-text">Prezzo: <?php echo $elem->prezzo ?> $</p>

                    <!-- TASTO PER ORDINARE -->
                    <a href="#" class="btn">ORDINA</a>

                    <!-- ICONA CATEGORIA -->
                    <p id="icon"><?php echo $elem->getIcona() ?></p>


                </div>
            </div>

            
        
        <?php } ?>

    </div>

</main>