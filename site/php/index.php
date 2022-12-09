<?php
require_once 'auth.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <!-- CSS -->
    <link rel="stylesheet" href="../StyleCss/login.css" />
    <link rel="stylesheet" href="../StyleCss/FontPoppins.css" />

    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/all.min.css" />

    <link rel="shortcut icon" href="../assets/imgs/logo.png" type="image/x-icon" />
    <!-- Remix icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Bootstrap Links -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <title> Play Tach</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    if ($msg) {
    ?>
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'incorrect Email or Password',
                text: 'Please check your details and try again',
            });
        </script>
    <?php
    }
    ?>





    <div class="row px-2 mx-4">
        <div class="card  col-lg-10 col-xl-9 flex-row mx-auto px-0">
            <div class="img-left d-none d-md-flex"></div>
            <div class="col text-center d-flex flex-column  py-5 px-5">

                <h4 class="title">
                    <span class="titleP">P</span>layTech

                </h4>
                <form class="d-flex flex-column gap-3" action="" method="post">
                    <div class="d-flex align-items-center">
                        <!-- <label for="email" class="form-label d-flex align-items-center"><span class="col"><i class="fa fa-envelope-o fs-4" aria-hidden="true"></i> </span></label> -->
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="d-flex align-items-center">
                        <!-- <label for="pwd" class="form-label d-flex align-items-center"><span class="col"><i class="ri-key-2-line fs-4"></i></span></label> -->
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                    </div>

                    <div class=" form-check mb-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-dark ">Login</button>


                </form>

            </div>

        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>