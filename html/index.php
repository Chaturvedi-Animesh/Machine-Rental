<?php 
if($_GET){
  $username = $_GET['name']; // print_r($_GET); //remember to add semicolon      
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css/index.css">
  <title>The Krishi Tools Ltd.</title>
</head>

<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="index.php">The Krishi Tools Ltd.</a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-light"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav text-white">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactUs.html">Contact Us</a>
          </li>
          <?php if(isset($username)) { ?>
            <li class="nav-item" style="margin: auto; user-select:none;">Welcome <?php echo $username ?> </li>
            <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link " href="login.html">Log in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="signup.html">Sign Up</a>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>


  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../images/prime-img.jpg" class="d-block w-100 c-img" alt="Farming Equipment Image">
        <div class="carousel-caption d-none d-md-block">
          <h5>Farmers Are The Backbone of Indian Economy</h5>
          <p>Our Mission is to strengthen this backbone.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../images/prime-img-2.jpg" class="d-block w-100 c-img" alt="Farming Equipment Image">
        <div class="carousel-caption d-none d-md-block">
          <h5>Farmers Are The Backbone of Indian Economy</h5>
          <p>Our Mission is to strengthen this backbone.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../images/prime-img-3.jpg" class="d-block w-100 c-img" alt="Farming Equipment Image">
        <div class="carousel-caption d-none d-md-block">
          <h5>Farmers Are The Backbone of Indian Economy</h5>
          <p>Our Mission is to strengthen this backbone.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <div class="product-description" style="margin-top: 10px;">

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="../images/cultivator.png">
          <img src="../images/cultivator.png" alt="Cultivator Image" width="600" height="400">
        </a>
        <div class="desc">A cultivator is an agricultural machinery tool used for weeding, loosening the soil after
          growth, and churning and crushing the soil before sowing.</div>
      </div>
    </div>


    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="../images/plough.jpg">
          <img src="../images/plough.jpg" alt="Plough Image" width="600" height="400">
        </a>
        <div class="desc">A plough or plows are used to till the soil initially before seeding. The primary function of
          plowing is to turn over the top layer of soil, bringing new nutrients to the surface</div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="../images/harvestor.jpg">
          <img src="../images/harvestor.jpg" alt="Harvestor Image" width="600" height="400">
        </a>
        <div class="desc">The tractor combine harvester is a very well-liked piece of farm equipment created for the
          effective gathering of massive amounts of grain.</div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="../images/seed drill.jpg">
          <img src="../images/seed drill.jpg" alt="Seed Drill Image" width="600" height="400">
        </a>
        <div class="desc">One of the most used farming tools is the Roto Seed Drill, which combines a Rotary Tiller and
          a
          Seed Drill. It is employed practically everywhere in India to sow grass, wheat and barley seeds</div>
      </div>
    </div>

  </div>


  <footer class="text-center text-lg-start bg-light text-muted">
    <section>
      <div class="container text-center text-md-start mt-5" style="padding: 5px;">

        <div class="row mt-3">

          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>The Krishi Tools Ltd.
            </h6>

            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="aboutus.html">About Us</a></li>
              <li><a href="contactUs.html">Contact Us</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="signup.html">Sign Up</a></li>
            </ul>
          </div>

          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Social Media
            </h6>

            <ul>
              <li><i class="bi bi-facebook"></i> Facebook</li>
              <li><i class="bi bi-instagram"></i> Instagram</li>
              <li><i class="bi bi-twitter"></i> Twitter</li>
              <li><i class="bi bi-linkedin"></i> Linkedin</li>
              <li><i class="bi bi-google"></i> Google</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2023 Copyright:
      <a class="text-reset fw-bold" href="index.php">thekrishitools.com</a>
    </div>

  </footer>

</body>

</html>