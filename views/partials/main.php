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
                    <h5 class="card-title"><?php echo $elem->titolo ?></h5>
                    <p class="card-text">Prezzo: <?php echo $elem->prezzo ?> $</p>
                    <a href="#" class="btn">ORDINA</a>
                    <p id="icon"><?php echo $elem->getIcona() ?></p>
                </div>
            </div>

            
        
        <?php } ?>

    </div>

</main>