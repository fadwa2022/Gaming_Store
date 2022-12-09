<?php
require_once 'functions.php';
require_once 'credentials.php';
createProduct();
$category = getCategories();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Products</title>

    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/all.min.css" />

    <link rel="shortcut icon" href="../assets/imgs/logo.png" type="image/x-icon" />

    <!-- Remix icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light text-dark ">
        <div class="container-fluid navbar-brand">
            <a href="#" class="navbar-brand" onClick="history.go(-1);">
                <i class="ri-arrow-left-line text-black"></i>
            </a>
            <span class="fs-4 fw-semibold"> New Product </span>
        </div>
    </nav>
    <div class="container col-md-8">
        <div class="container-fluid my-5">
            <div class="row p-2">
                <div class="col-md-12">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">

                            <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Product name" required>
                        </div>
                        <!-- <div class="mb-3">
    <label for="validationCustom01" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="validationCustom01" name="title"  required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div> -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product Price</label>
                            <input type="number" name="prix" class="form-control" id="exampleFormControlInput1" placeholder="Product price" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Product Quantity</label>
                            <input type="number" name="quantite" class="form-control" id="exampleFormControlInput1" placeholder="Product quantity" required>
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
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Product Image</label>
                            <input class="form-control" type="file" name="image" id="formFile" required>
                        </div>


                        <div class="col-12 d-flex justify-content-between">
                            <input type="submit" class="btn btn-primary rounded-3 px-4 ml-2 mt-2" name="sub" value="Add">
                            <a href="dashboard.php" class="btn btn-secondary rounded-3 px-4 ml-2 mt-2">Cancel</a>
                        </div>


                </div>

                </form>
            </div>
        </div>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/all.min.js"></script>
</body>

</html>