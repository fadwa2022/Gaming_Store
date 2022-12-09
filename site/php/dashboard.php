<?php

require 'credentials.php';
require 'functions.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <!-- CSS -->
  <!-- Bootstrap Links -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/all.min.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- Css -->


  <link rel="shortcut icon" href="../assets/imgs/logo.png" type="image/x-icon" />
  <!-- Remix icons -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

  <style>
    table tr td:last-child,
    table tr th:last-child {
      display: flex !important;
      flex-wrap: wrap !important;
      justify-content: center !important;
    }
  </style>

</head>

<body>
  <!-- Navbar  -->

  <nav class="navbar navbar-expand-lg bg-light text-dark fw-bolder">
    <div class="container-fluid ">
      <a href="dashboard.php" class="navbar-brand d-flex justify-content-center align-items-center">
        <img src="../assets/imgs/logo.png" alt="Logo image" width="60" class="d-inline-block" />
        <span class=""> Dashboard <small style="font-size: 10px; font-weight: 700;">
            <?php
            if ($_SESSION["username"]) {
              echo $_SESSION['username'];
            }
            ?></small> </span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-3 d-flex gap-2 align-items-center">
          <li>
            <a href="./home.php" class="nav-link">Home</a>
          </li>

          <form class="d-flex" role="search" method="POST">
            <input class="form-control me-2" name="keyword" type="search" placeholder="Search by Name or ID" aria-label="Search">
            <button class="btn btn-outline-dark" name="search">Search</button>
          </form>

          <a href="./index.php"><button class="btn btn-primary ms-5" style=" background-color: #000; border:none;">Logout</button></a>

        </ul>


      </div>
    </div>
  </nav>


  <div class="container">
    <div class="container-fluid my-5">
      <div class="row">
        <div class="col">

          <div class="mt-5 mb-5 d-flex justify-content-between">
            <h2 class="pull-left ">Products</h2>
            <a href="create.php" class="btn bg-dark  d-flex align-items-center text-decoration-none text-white ">New Product</a>
          </div>

          <div class="container overflow-scroll">
            <?php
            if (isset($_POST['search'])) {
              $keyword = $_POST['keyword'];
              $query = $data->prepare("SELECT * FROM produits WHERE title LIKE '%$keyword%' or id_prod='$keyword' ");
              $query->execute();

              echo '<table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Category</th>
                <th scope="col">Tools</th>
              </tr>
            </thead>
            <tbody> ';
              while ($target = $query->fetch()) {


                echo '<tr>
                        <th scope="row">' . $target["id_prod"] . '</th>
                        <td>' . $target["title"] . '</td>
                        <td>' . $target["prix"] . '</td>
                        <td>' . $target["quantite"] . '</td>
                        <td>' . $target["id_cat"] . '</td>
                        <td class="d-flex justify-content-start"> <a href="Update.php?id=' . $target['id_prod'] . '" class="me-3" ><i class="bi bi-pencil-square text-success"></i></a>
                      <a href="delete.php?id=' . $target['id_prod'] . '" ><span class="bi bi-trash text-danger"></span></a>
                      </td>
                        
                      </tr>';
                echo "</tbody>";
                echo "</table>";
                break;
              }
            } else {
              $sql = "SELECT * FROM produits";
              $res = $data->query($sql);

              if ($res->rowCount() > 0) {
                echo '<table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Category</th>
                    <th scope="col">Tools</th>
                  </tr>
                </thead>
                <tbody> ';
                $products = $res->fetchALL();
                foreach ($products as $key) {
                  echo '<tr>
                  <th scope="row">' . $key["id_prod"] . '</th>
                  <td>' . $key["title"] . '</td>
                  <td>' . $key["prix"] . '</td>
                  <td>' . $key["quantite"] . '</td>
                   <td>' . $key["id_cat"] . '</td>
                   <td class="d-flex justify-content-center"> <a href="Update.php?id=' . $key['id_prod'] . '" class="me-3" ><i class="bi bi-pencil-square text-success"></i></a>
                 <a href="delete.php?id=' . $key['id_prod'] . '" ><span class="bi bi-trash text-danger"></span></a>
                 </td>
                   
                </tr>';
                }
                echo "</tbody>";
                echo "</table>";
              } else {
                echo '<div class="alert alert-danger"><em>Pas d\'enregistrement</em></div>';
              }
            }



            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/all.min.js"></script>
</body>

</html>