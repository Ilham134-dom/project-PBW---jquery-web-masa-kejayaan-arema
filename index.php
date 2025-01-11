<?php
include "koneksi.php"; 
?>
<!doctype html>
<html lang="en"data-bs-theme="dark">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masa Kejayaan Arema</title>
    <link rel="icon" href="img/Arema.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- Nav begin -->
    <nav class="navbar navbar-expand-lg bg-white text-dark sticky-top">
        <div class="container">
          <a class="navbar-brand text-dark" href="#">Arema Fc</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark ">
              <li class="nav-item">
                <a class="nav-link text-dark" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark " href="#article">Article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#gallery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#schedule">Schedule</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#about_me">About Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="login.php" target="_blank">login</a>
              </li>
              <li class="nav-item">
                <button type="button" id="toggleTheme">switch</button>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!--nav end-->
    <!--hero begin-->
    <section id="hero" class="text-center p-5  bg-primary-subtle text-sm-start ">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <img src="img/Arema.jpg" class="img-fluid" width="300" alt="Arema">
                <div>
                    <h1 class="fw-bold display-4">
                        Masa Kejayaan Arema: Sejarah dan Prestasi Klub Singo Edan
                     </h1>
                     <h4 class="lead display-6">sebuah kebanggaan mengawal sang juara</h4>
                     <h6>
                      <span id="tanggal"></span>
                      <span id="jam"></span>
                     </h6>
                </div>
            </div>
        </div>
    </section>
    <!--hero end -->
   <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
    <!--article end  -->
    <!--gallery begin -->
            <!-- Gallery -->
            <section id="gallery" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">Galeri</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM galeri ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
             <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body"> 
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
         
                  </div>
            </div>
        </section>
        <!--  -->
    </section>
    <!--gallery end  -->
    <!-- Schedule begin -->
    <br>
    <section id="schedule" class="text-center p-5 bs-danger-bg-subtle"></section>
    <h1 align="center">Schedule</h1>
    
    <div class="container my-5">
      <!-- Top Row with 4 Cards -->
      <div class="row justify-content-evenly mt-4 mb-4">
        <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center card-spacing">
          <div class="card" style="width: 18rem;">
            <div class="card-header bg-danger" align="center">Senin</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"align="center">Probabilitas dan Statistika
                <p align="center">12.30-15.00 | H.4.5</p>
              </li>
              <li class="list-group-item" align="center">Rekayasa Perangkat Lunak
                <p align="center">15.30-18.00 | H.4.6</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center card-spacing">
          <div class="card" style="width: 18rem;">
            <div class="card-header bg-danger" align="center">Selasa</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"align="center">Sistem Operasi
                <p align="center">09.30-11.00 | H.4.7</p>
              </li>
              <li class="list-group-item" align="center">Logika Informatika
                <p align="center">15.30-18.00 | H.5.8</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center card-spacing">
          <div class="card" style="width: 18rem;">
            <div class="card-header bg-danger"align="center">Rabu</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"align="center">Penambangan Data
                <p align="center">09.30-11.40 | H.4.4</p>
              </li>
              <li class="list-group-item" align="center">Penambangan Data
                <p align="center">14.10-15.30 | D.4.3</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center card-spacing">
          <div class="card" style="width: 18rem;">
            <div class="card-header bg-danger"align="center">Kamis</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"align="center">Pemprograman Berbasis Web
                <p align="center">12.30-14.30 | D.4.4</p>
              </li>
              <li class="list-group-item" align="center">Kriptografi
                <p align="center">15.30-18.00 | H.4.4</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    
      <div class="container my-5">
        <div class="row d-flex justify-content-evenly gap-3">
          <!-- Card for Friday -->
          <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center card-spacing">
            <div class="card" style="width: 18rem;">
              <div class="card-header bg-danger" align="center">Jumat</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item" align="center">Basis Data Teori
                  <p align="center">09.30-11.00 | H.4.4</p>
                </li>
              </ul>
            </div>
          </div>
    
          <!-- Card for Saturday -->
          <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center card-spacing">
            <div class="card" style="width: 18rem;">
              <div class="card-header bg-danger" align="center">Sabtu</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item" align="center">Free
                  <p align="center">-|-</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- schedule end -->
    <!--about me begin-->
    <section id="about_me" class="text-center p-5 mt-5 mb-5 text-sm-start bg-danger text-white">
      <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-center gap-4 justify-content-center">
          <div class="text-center mb-3 mb-md-0"id="logo">
            <div>
            <img src="img/foto1.jpg" class="rounded-circle img-fluid w-75 w-md-50" alt="Image">
            </div>
         </div>
          <div class="text-md-left" id="lev">
            <p>A11.2023.15105</p>
            <h3><b>Ilham Gozali</b></h3>
            <p>Program Studi Teknik Informatika</p>
            <p><b><a href="" class="text-white text-decoration-none">Universitas Dian Nuswantoro</a></b></p>
          </div>
        </div>
      </div>
    </section>
    <!-- about me end-->
    <!--footer begin -->
    <footer class="text-center p-5">
        <div>
           <a href="https://www.instagram.com/aremafcofficial/?hl=id"><i class="bi bi-instagram h2 p-2 text-dark" ></i></a>
            <a href="https://x.com/AremafcOfficial"><i class="bi bi-twitter-x h2 p-2 text-dark"></i></a>
           <a href="https://wa.me/6281228164595"><i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
        </div>
        <div>
                Ilham Gozali &Copy; 2024
        </div>
    </footer>
    <!-- footer end -->
    <script type="text/javascript">
      window.setTimeout("tampilwaktu()",1000);

      function tampilwaktu() {
       var waktu = new Date();  // Menggunakan Date() yang benar
       var bulan = waktu.getMonth() + 1;  // Mendapatkan bulan (ditambah 1 karena bulan dimulai dari 0)
       var tanggal = waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
       var jam = waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();

       document.getElementById("tanggal").innerHTML = tanggal;
       document.getElementById("jam").innerHTML = jam;

      setTimeout(tampilwaktu, 1000); // Panggilan ulang fungsi secara rekursif setiap detik
}

      // Memulai fungsi tampilwaktu ketika halaman dimuat
      window.onload = tampilwaktu;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js">
    </script>

<script>
  const toggleThemeButton = document.getElementById('toggleTheme');
  const bodyElement = document.body;

  toggleThemeButton.addEventListener('click', () => {
      if (bodyElement.getAttribute('data-bs-theme') === 'dark') {
          bodyElement.setAttribute('data-bs-theme', 'light');
      } else {
          bodyElement.setAttribute('data-bs-theme', 'dark');
      }
  });
</script>
<script>
  document.getElementById("logo").onclick=function(){
    document.getElementById("lev").classList.toggle("d-none")
  }
</script>
  </body>
</html>