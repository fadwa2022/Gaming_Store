<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- CSS -->
  <link rel="stylesheet" href="../StyleCss/home.css" />

  <!-- SCSS -->
  <link rel="stylesheet" href="./../StyleCss/contact.css" />

  <!-- Bootstrap Links -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/all.min.css" />

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <!-- Remix icons -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <title>Play Tech</title>
</head>

<body>
  <!-- Navbar  -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark ">
    <div class="container-fluid">
      <a href="#" class="navbar-brand">
        <img src="../assets/imgs/logo.png" alt="Logo image" width="60" class="d-inline-block" />
        <span class=""> PlayTech </span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-label="Toggle navigation">
        <i class="ri-apps-2-line"></i>
      </button>
      <div class="collapse navbar-collapse" id="toggleMobileMenu">
        <ul class="navbar-nav ms-auto text-center">
          <li>
            <a href="./home.php" class="nav-link  active  mx-4">Home</a>
          </li>
          <li>
            <a href="./gallery.php" class="nav-link mx-4">Gallery</a>
          </li>
          <li>
            <a href="./dashboard.php" class="nav-link mx-4">Dashboard</a>
          </li>
          <li>
            <a href="./contact.php" class="nav-link  mx-4">Contact us</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!--Contact -->
  <div class="container mt-5 ">
    <h1 class="text-center">Contact us</h1>
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
        <label for="comments" class="form-label"> comments,questions?</label>
        <textarea name="" class="form-control" id="comments" rows="3" required></textarea>
      </div>
      <div class="col-md-12">
        <button type="submit" onclick="myFunction()" class="btn btn-primary">submit</button>
      </div>
    </form>
  </div>
  <!-- reviews -->
  <section>
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-xl-8 text-center">
        <h3 class="mb-4">Testimonials</h3>
        <p class="mb-4 pb-2 mb-md-5 pb-md-0">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
          numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
          quisquam eum porro a pariatur veniam.
        </p>
      </div>
    </div>

    <div class="row text-center p-4">
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
  <!-- JS SCRIPTS -->
  <!-- <script src="../ScriptJs/main.js"></script> -->
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/all.min.js"></script>
  <script>
    function myFunction() {
      alert("we’ll answer your message later please visit your email")
    }
  </script>
</body>

</html>