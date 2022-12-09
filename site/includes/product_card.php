<?php
require '../pages/functions.php';

$products = getProducts("1");

foreach ($products as $prod) {
?>
    <div class="col">
        <div class="card shadow-sm border-0" id="card">
            <div>
                <img src="../images/<?php echo $prod['image'] ?>" class="card-img-top w-100 h-50" alt="..." />
            </div>

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">
                    <p class="card-text"><?php echo $prod['title'] ?></p>
                    <small class="text-muted"><?php echo $prod['prix'] ?> MAD</small>
                </div>
            </div>
        </div>
    </div>


<?php } ?>