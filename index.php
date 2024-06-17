<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: logres/login.php");
  exit();
}


echo "Welcome, " . $_SESSION['username'] . "! You are logged in.";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coffee Shop</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item fs-4 mx-3">
            <a class="nav-link" href="content/content-1.html">Home</a>
            </li>
            <li class="nav-item fs-4 mx-3">
              <a class="nav-link" href="#">blog</a>
            </li>
            <li class="nav-item fs-4 mx-3">
              <a class="nav-link" href="#services">Services</a>
            </li>
            
          </ul>
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- end-navbar -->
     <div class="container pt-5 ">
      <div class="row align-items-center">
        <div class="col-md-6">
          <a href="#"><img src="https://plus.unsplash.com/premium_photo-1669374537810-f88d8ad82818?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Y29mZmVlfGVufDB8fDB8fHww" alt=""></a>
        </div>
        <div class="col-md-5 offset-lg-1">
          <h1 class="py-3">coffee hot chocolate </h1>
          <p>Lorem ipsum dolor sit amet consectetur, 
            adipisicing elit. Magni numquam cum dolorem 
            iste explicabo aut animi optio modi, reiciendis,
             dolore maxime voluptas itaque praesentium alias 
             mollitia hic vero sit qui.</p>
        </div>
      </div>
     </div>

    

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <!-- Custom JS -->
  </body>
</html>
