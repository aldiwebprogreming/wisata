<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Langkat Memikat</title>
  <link rel="stylesheet" href="<?= base_url('assets/')  ?>frontend/libraries/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="<?= base_url('assets/')  ?>frontend/styles/main.css" />
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,700,700i,900,900i&display=swap" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
</head>

<body>
  <!-- Semantic elements -->
  <!-- https://www.w3schools.com/html/html5_semantic_elements.asp -->

  <!-- Bootstrap navbar example -->
  <!-- https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->

  <!-- Navbar -->
  <div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand" href="#">
        <h4  style="font-weight: bold; color: #2c1389;" class="">LANGKATMEMIKAT</h4>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item mx-md-2">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="#">Paket Travel</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Services
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Link 1</a>
              <a class="dropdown-item" href="#">Link 2</a>
              <a class="dropdown-item" href="#">Link 3</a>
            </div>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="#">Testimonial</a>
          </li>
        </ul>

        <!-- Mobile button -->
        <form class="form-inline d-sm-block d-md-none">
          <button class="btn btn-login my-2 my-sm-0">
            Masuk
          </button>
        </form>
        <!-- Desktop Button -->
        <form class="form-inline my-2 my-lg-0 d-none d-md-block">
          <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
            Masuk
          </button>
        </form>
      </div>
    </nav>
  </div>


