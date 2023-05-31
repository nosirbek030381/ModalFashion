<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "narsadb";

$conn = new mysqli($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- link  -->
  <link rel="stylesheet" href="interface/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <title>Modalar - olami</title>
</head>

<body>






  <nav class="navbar navbar-expand-md navbar-dark bg-dark position-fixed fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand fs-2 text-white" href="#">Modalar <span class="text-success">.Olami</span></a>
      <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
        <ul class="navbar-nav fs-4 fw-bold">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#aloqa">Aloqa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" id="openModalBtn" onclick="openModal()" aria-current="page" href="login/signup.php">Ro'yxatdan o'tish</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="login/login.php">Kirish</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <!-- main  -->
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000">
        <img src="interface/img/c1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="interface/img/c2.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="interface/img/maxresdefault (2).jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="interface/img/maxresdefault.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- items -->

  <div class="container" id="Item">
    <div class="row g-4 mt-5">
      <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 1 ";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();  ?>
      <div class="col-sm-6 col-md-5">
        <?php echo "<img height=235px widht=415px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "'  class=img-fluid>"; ?>
      </div>
      <div class="col-sm-6 col-md-5">
        <h3><?php echo $row['title'] ?></h3>
        <p><?php echo $row['malumot'] ?></p>
      </div>

    </div>


    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
      <div class="col">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 2,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <?php echo "<img height=235px widht=415px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "'  class=img-fluid>"; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
          </div>
        </div>
      </div>
      <div class="col">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 3,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <?php echo "<img height=235px widht=415px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "'  class=img-fluid>"; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
          </div>
        </div>
      </div>
      <div class="col">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 4,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <?php echo "<img height=235px widht=415px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "'  class=img-fluid>"; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
          </div>
        </div>
      </div>
      <div class="col">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 5,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <?php echo "<img height=235px widht=415px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "'  class=img-fluid>"; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
          </div>
        </div>
      </div>
      <div class="col">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 6,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <?php echo "<img height=235px widht=415px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "'  class=img-fluid>"; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
          </div>
        </div>
      </div>
      <div class="col">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 7,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <?php echo "<img height=235px widht=415px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "'  class=img-fluid>"; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
          </div>
        </div>
      </div>
    </div>



    <div class="row row-cols-1 row-cols-md-2 g-4 mt-4">
      <div class="col">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 8,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <?php echo "<img height=635px widht=356px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "'  class=img-fluid>"; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
          </div>
        </div>
      </div>
      <div class="col">
        <?php $sql = "SELECT * FROM images ORDER BY id DESC LIMIT 9,1 ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  ?>
        <div class="card h-100">
          <?php echo "<img height=635px widht=356px src='data:" . $row['mime_type'] . ";base64," . base64_encode($row['image_data']) . "'  class=img-fluid>"; ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['malumot'] ?></p>
          </div>
        </div>

        
      </div>




    </div>
  </div>

  <!-- items -->

  <!-- aloqa  -->

  <div class="container " id="aloqa">
    <h1 class="mt-3 text-center  text-uppercase">Taklif</h1>
    <div class="contact mt-3">
      <div class="contact-box">
        <div class="left"></div>
        <div class="right">
          <h2>Aloqa uchun</h2>
          <input type="text" class="field" placeholder="Ismingiz...">
          <input type="text" class="field" placeholder="Email...">
          <input type="text" class="field" placeholder="Telefon...">
          <textarea placeholder="Xabar..." class="field"></textarea>
          <button class="btn__y">Yuborish</button>
        </div>
      </div>
    </div>
  </div>


  <!-- aloqa -->

  <!-- footer  -->

  <footer>
    <div class="container footer_i">
      <div class="row footer__o">
        <div class="col">
          <h3>Haqida</h3>
          <p>Modalar olamida dokonlar, odatda, biron bir tematika asosida tashkil etilgan bo'lib, bir yoki bir nechta mahsulotlarni sotish uchun xaridorga imkoniyat beradi. Ularga keng doirada maxsus mavzular bo'lishi mumkin, masalan, kiyim-kechak, elektronika, ovqat-tovuq, sport buyumlari va hokazo.</p>
        </div>

        <div class="col">
          <h3>Aloqa</h3>
          <p>Al-Xorazmiy, 110-uy TATUUF</p>
          <p>Email: ni761809@gmail.com</p>
          <p>Phone: +998 91 420 03 86</p>
        </div>
        <div class="col">
          <h3>Obuna bo'ling</h3>
          <ul class="social-media">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-telegram"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            <li><a href="#"><i class="fab fa-github"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>



  <!-- js link -->
  <script src="interface/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

</body>

</html>