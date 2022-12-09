<?php
require_once 'functions.php';
$products = update();
$category = getCategories();
?>


<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <title>Update Product</title>

        <!-- Bootstrap Links -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/all.min.css" />

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

        <!-- Remix icons -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />


</head>

<body>
        <nav class="navbar navbar-expand-lg bg-light text-dark ">
                <div class="container-fluid navbar-brand">
                        <a href="#" class="navbar-brand" onClick="history.go(-1);">
                                <i class="ri-arrow-left-line text-black"></i>
                        </a>
                        <span class="fs-4 fw-semibold"> Update Product </span>
                </div>
        </nav>
        <div class="container col-md-8">
                <div class="container-fluid my-5">
                        <div class="row p-2">
                                <div class="col-md-12">
                                        <form action="" method="POST">
                                                <div class="mb-3">
                                                        <form action="" method="post">
                                                                <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                                                                <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Product name" value="<?php echo $products[0]['title'] ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Product Price</label>
                                                        <input type="number" name="prix" class="form-control" id="exampleFormControlInput1" placeholder="Product price" value="<?php echo $products[0]['prix'] ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Product Quantity</label>
                                                        <input type="number" name="quantite" class="form-control" id="exampleFormControlInput1" placeholder="Product quantity" value="<?php echo $products[0]['quantite'] ?>" required>
                                                </div>
                                                <div class="form-group mt-2 mb-5">
                                                        <label for="exampleFormControlInput1" class="form-label">Category</label>

                                                        <select name="id_cat" id="" class="form-select" required>
                                                                <?php

                                                                foreach ($category as $key) {
                                                                        if ($key['id_cat'] == $products[0]['id_cat']) { ?>
                                                                                <option value="<?php echo $key['id_cat'] ?>" selected><?php echo $key['categorie'] ?></option>
                                                                        <?php
                                                                        } else { ?>
                                                                                <option value="<?php echo $key['id_cat'] ?>"><?php echo $key['categorie'] ?></option>
                                                                        <?php   } ?>



                                                                <?php } ?>

                                                        </select>
                                                </div>



                                                <div class="col-12 d-flex justify-content-between">
                                                        <input type="submit" class="btn btn-success rounded-5 px-4 ml-2 mt-2" name="sub" value="Update">
                                                        <a href="dashboard.php" class="btn btn-secondary rounded-5 px-4 ml-2 mt-2">Cancel</a>
                                                </div>
                                        </form>

                                </div>
                        </div>
                </div>
        </div>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/all.min.js"></script>
</body>

</html>