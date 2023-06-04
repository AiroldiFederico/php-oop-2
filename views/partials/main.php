<?php

include __DIR__ . '/../../database/db.php';


?>

<main class="col-8 m-auto">

    <h1 class="text-center">PET SHOP</h1>


    <div class="d-flex  justify-content-center mt-4 gap-2">

        <?php foreach($prodotti as $elem) { ?>

            <div class="card" style="width: 18rem;">
                <img src="<?php echo $elem->immagine ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $elem->titolo ?></h5>
                    <p class="card-text">Prezzo: <?php echo $elem->prezzo ?> $</p>
                    <a href="#" class="btn btn-primary">ORDINA</a>
                    <p><?php echo $elem->getIcona() ?></p>
                </div>
            </div>

            
        
        <?php } ?>

    </div>
</main>