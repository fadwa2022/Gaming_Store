<?php
session_start();
if (!$_SESSION["logged"]) {
  header('location: index.php');
  exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- CSS -->
  <link rel="stylesheet" href="./../StyleCss/home.css" />
  <link rel="stylesheet" href="./../StyleCss/FontPoppins.css" />

  <!-- SCSS -->
  <link rel="stylesheet" href="./../css/homeScss.css" />

  <!-- Bootstrap Links -->
  <link rel="stylesheet" href="./../css/bootstrap.min.css" />
  <link rel="stylesheet" href="./../css/all.min.css" />

  <link rel="shortcut icon" href="../assets/imgs/logo.png" type="image/x-icon" />
  <!-- Remix icons -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <title>Play Tech</title>
</head>

<body>
  <!--  -->

  <section class="hero bg-black">
    <div class="main-width">
      <!-- Navbar  -->
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a href="#" class="navbar-brand">
            <img src="../assets/imgs/logo.png" alt="Logo image" width="60" class="d-inline-block" />

            <span class=""> PlayTech
              <small style="font-size: 10px;">
                <?php
                if ($_SESSION["username"]) {
                  echo $_SESSION['username'];
                }
                ?></small>
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-label="Toggle navigation">
            <i class="ri-apps-2-line"></i>
          </button>
          <div class="collapse navbar-collapse" id="toggleMobileMenu">
            <ul class="navbar-nav ms-auto text-center">
              <li>
                <a href="home.php" class="nav-link  active  mx-4">
                  Home</a>

              </li>
              <li>
                <a href="./gallery.php" class="nav-link mx-4">Gallery</a>
              </li>
              <li>
                <a href="./dashboard.php" class="nav-link mx-4">Dashboard</a>
              </li>
              <li>
                <a href="#contact" class="nav-link  mx-4">Contact us</a>
              </li>

              <a href="./index.php"><button class="btn btn-primary" style=" background-color: #000; border:none;">Logout</button></a>

            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="content">
      <div class="main-text">
        <h6>#1 Trending</h6>
        <h1>PS5</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
          laborum ea, deleniti, similique dolores nobis quibusdam voluptate
          debitis iure, exercitationem nisi vel quos! Rerum nemo eum eius
          cum quasi? Quod!
        </p>
        <a href="gallery.php">Order Now <i class="ri-arrow-right-s-line"></i></a>
      </div>

      <div class="image">
        <img src="../assets/imgs/ps5.png" />
      </div>
    </div>
    </div>
  </section>

  <!-- Ctegories -->
  <div class="container-fluid p-5">
    <h2 class="my-4">Our Categories</h2>
    <div class="row gy-4 px-1 py-2">
      <div class="col">
        <div class="card border-0 text-center rounded-4">
          <a href="" id="cate">
            <div class="card shadow rounded-4">
              <img src="../assets/imgs/gamming_acces.jpg" class="card-img p-4" alt="..." />
            </div>
            <div class="card-body ">
              <h5 class="card-title">Accessories</h5>

            </div>
          </a>

        </div>
      </div>
      <div class="col">
        <div class="card border-0 text-center rounded-4">
          <a href="" id="cate">
            <div class="card shadow rounded-4">
              <img src="../assets/imgs/ps5-ds.jpg" class="card-img p-4" alt="..." />
            </div>
            <div class="card-body text-center">
              <h5 class="card-title">Consoles</h5>
            </div>
          </a>
        </div>
      </div>

      <div class="col">
        <div class="card border-0 text-center rounded-4">
          <a href="" id="cate">
            <div class="card shadow rounded-4">
              <img src="../assets/imgs/lp.png" class="card-img p-4" alt="..." />
            </div>
            <div class="card-body">
              <h5 class="card-title">Laptops</h5>

            </div>
          </a>
        </div>
      </div>

      <div class="col">
        <div class="card border-0 text-center rounded-4">
          <a href="" id="cate">
            <div class="card shadow rounded-4">
              <img src="../assets/imgs/phones.png" class="card-img p-4" alt="..." />
            </div>

            <div class="card-body">
              <h5 class="card-title">Desktops</h5>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Recommended -->
  <div class="container mb-5">
    <h2 class="mb-5">Recommended</h2>
    <div class="row gy-4 px-1 py-2">
      <div class="col">
        <div class="card p-3">
          <div class="row g-1">
            <div class="col-md-5">
              <img src="../assets/imgs/ps5-ds-removebg-preview.png" class="img-fluid rounded-start" alt="..." />
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h5 class="card-title">Saga Gensesis Controller</h5>
                <p class="card-text">149.99 MAD</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card p-3">
          <div class="row g-1">
            <div class="col-md-5">
              <img class="img-fluid rounded-start" src="../assets/imgs/ac-sl1500-removebg-preview.png" alt="..." />
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h5 class="card-title">HP OMEN 15 RTX 3070</h5>
                <p class="card-text">1949.99 MAD</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card p-3">
          <div class="row g-1">
            <div class="col-md-5">
              <img src="../assets/imgs/ps5-ds-removebg-preview.png" class="img-fluid rounded-start" alt="..." />
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h5 class="card-title">Saga Gensesis Controller</h5>
                <p class="card-text">149.99 MAD</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Post Card -->

  <section class="">
    <div class="container py-2">
      <div class="h1 text-center text-dark" id="pageHeaderTitle">
        Special Products
      </div>
      <!--  -->
      <article class="postcard light blue">
        <a class="postcard__img_link" href="#">
          <img class="postcard__img" src="../assets/imgs/ps5-ds-removebg-preview.png" alt="Image Title" />
        </a>
        <div class="postcard__text t-dark">
          <h1 class="postcard__title blue"><a href="#" class="text-decoration-none">PlayStaion 5</a></h1>

          <div class="postcard__bar"></div>
          <div class="postcard__preview-txt">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
            fugiat asperiores inventore beatae accusamus odit minima enim,
            commodi quia, doloribus eius! Ducimus nemo accusantium maiores
            velit corrupti tempora reiciendis molestiae repellat vero.

          </div>
          <ul class="postcard__tagbox ">

            <button type="button" class="btn btn-dark rounded-5">
              Buy now
            </button>
          </ul>
        </div>
      </article>
      <!--  -->
      <article class="postcard light red">
        <a class="postcard__img_link" href="#">
          <img class="postcard__img" src="../assets/imgs/ac-sl1500-removebg-preview.png" alt="Image Title" />
        </a>
        <div class="postcard__text t-dark">
          <h1 class="postcard__title red"><a href="#" class="text-decoration-none">Acer Laptop</a></h1>

          <div class="postcard__bar"></div>
          <div class="postcard__preview-txt">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
            fugiat asperiores inventore beatae accusamus odit minima enim,
            commodi quia, doloribus eius! Ducimus nemo accusantium maiores
            velit corrupti tempora reiciendis molestiae repellat vero.
          </div>

          <ul class="postcard__tagbox ">

            <button type="button" class="btn btn-dark rounded-5">
              Buy now
            </button>
          </ul>
        </div>
      </article>
      <!--  -->
      <article class="postcard light green">
        <a class="postcard__img_link" href="#">
          <img class="postcard__img" src="../assets/imgs/ps1-removebg-preview.png" alt="Image Title" />
        </a>
        <div class="postcard__text t-dark">
          <h1 class="postcard__title green"><a href="#" class="text-decoration-none">Classic PlayStaion 1</a></h1>

          <div class="postcard__bar"></div>
          <div class="postcard__preview-txt">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
            fugiat asperiores inventore beatae accusamus odit minima enim,
            commodi quia, doloribus eius! Ducimus nemo accusantium maiores
            velit corrupti tempora reiciendis molestiae repellat vero.
          </div>
          <ul class="postcard__tagbox ">

            <button type="button" class="btn btn-dark rounded-5">
              Buy now
            </button>
          </ul>
        </div>
      </article>

    </div>
  </section>
  <!--Contact -->
  <div class="container my-5 col-md-8" id="contact">
    <h1 class="text-center my-5">Contact us</h1>
    <form action="" class="row g-3">
      <div class="col-md-6">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" class="form-control" name="" id="" required>
      </div>
      <div class="col-md-6">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" name="" id="" required>
      </div>
      <div class="col-md-12">
        <label for="lastName" class="form-label">Email</label>
        <input type="email" class="form-control" name="" id="" required>
      </div>
      <div class="col-md-12">
        <label for="comments" class="form-label"> Comments, questions.. ?</label>
        <textarea name="" class="form-control" id="comments" rows="3" required></textarea>
      </div>
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary">submit</button>
      </div>
    </form>
  </div>



  <section class="container my-5">
    <div class="row d-flex justify-content-center ">
      <div class="col-md-10 col-xl-8 text-center ">
        <h3 class="mb-4">Testimonial</h3>
        <p class="mb-4 pb-2 mb-md-5 pb-md-0">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error numquam
          iure provident voluptate esse quasi, veritatis totam voluptas nostrum
          numquam iure provident voluptate esse quasi, quisquam eum porro a pariatur veniam.
        </p>
      </div>
    </div>

    <div class="row text-center p-5">
      <div class="col-md-4 mb-5 mb-md-0">
        <div class="d-flex justify-content-center mb-4">
          <img src="./../assets/imgs/top 1.jpg" class="rounded-circle shadow-1-strong" width="150" height="150" />
        </div>
        <h5 class="mb-3">PewDiePie (Felix Kjellberg)</h5>
        <p class="px-xl-3">
          <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet, consectetur
          adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic
          tenetur.
        </p>
        <ul class="list-unstyled d-flex justify-content-center mb-0">
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star-half-alt fa-sm text-warning"></i>
          </li>
        </ul>
      </div>
      <div class="col-md-4 mb-5 mb-md-0">
        <div class="d-flex justify-content-center mb-4">
          <img src="./../assets/imgs/top3.jpg" class="rounded-circle shadow-1-strong" width="150" height="150" />
        </div>
        <h5 class="mb-3"> Markiplier (Mark Fischbach)</h5>

        <p class="px-xl-3">
          <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet, consectetur
          adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic
          tenetur.
        </p>
        <ul class="list-unstyled d-flex justify-content-center mb-0">
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
        </ul>
      </div>
      <div class="col-md-4 mb-0">
        <div class="d-flex justify-content-center mb-4">
          <img src="./../assets/imgs/top2.jpg" class="rounded-circle shadow-1-strong" width="150" height="150" />
        </div>
        <h5 class="mb-3"> Ninja (Tyler Blevins)</h5>

        <p class="px-xl-3">
          <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet, consectetur
          adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic
          tenetur.
        </p>
        <ul class="list-unstyled d-flex justify-content-center mb-0">
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="far fa-star fa-sm text-warning"></i>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <?php include('footer.php'); ?>

  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/all.min.js"></script>

</body>

</html>