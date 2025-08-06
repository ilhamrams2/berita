<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SI PRESSMA NEWS</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f6f9;
    }

    .navbar {
      background-color: rgba(0, 0, 0, 1);
    }

    .navbar-nav .nav-link {
      color: white;
      transition: 0.3s;
    }

    .navbar-nav .nav-link:hover {
      color: #ffc107;
    }

    header.hero {
      background: linear-gradient(to right, #222, #444);
      color: white;
      padding: 60px 0;
      text-align: center;
    }

    header.hero img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin-bottom: 15px;
    }

    .breadcrumb {
      background: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
      border-radius: 8px;
    }

    .article {
      border-radius: 20px;
    }

    .article .card {
      background-color: transparent !important;
      border: none;
      height: 350px;
    }

    .article .card-top {
      height: 250px;
    }

    .article .card-top .img-thumbnail {
      object-fit: cover;
      height: 250px;
      width: 100%;
      border-radius: 0;
      padding: 0;
    }

    .article .text-primary {
      font-size: 18px;
      font-weight: bold;
      line-height: 1.5rem;
    }

    .article .card .information {
      font-size: 14px;
      font-weight: bold;
      font-style: normal !important;
    }

    footer {
      background-color: #212529;
      color: #bbb;
      padding: 20px 0;
    }

    footer a {
      color: #ffc107;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    .nav-item .active {
      color: #ffc107 !important;
    }
  </style>
</head>

<body>
  <?php
  // Ambil page atau default ke 'beranda'
  $page = $_GET['page'] ?? 'beranda';
  $currentPage = $page;
  ?>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img src="assets/img/presma.jpg" width="35" height="35" class="me-2" alt="Logo">
        SI Blogger
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?= $currentPage == 'beranda' ? 'active' : '' ?>" href="index.php?page=beranda">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $currentPage == 'berita' ? 'active' : '' ?>" href="index.php?page=berita">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $currentPage == 'kebijakan' ? 'active' : '' ?>" href="index.php?page=kebijakan">Ekskul</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $currentPage == 'peraturan' ? 'active' : '' ?>" href="index.php?page=peraturan">Prestasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $currentPage == 'galeri' ? 'active' : '' ?>" href="index.php?page=galeri">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $currentPage == 'struktur-organisasi' ? 'active' : '' ?>" href="index.php?page=struktur-organisasi">Struktur Organisasi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Header -->
  <header class="hero pt-5 mt-5">
    <div class="container">
      <img src="assets/img/presma.jpg" alt="Logo">
      <h1 class="display-5 fw-bold">PRESMAs NEWS</h1>
      <p class="lead fst-italic">"IF BETTER IS POSSIBLE"</p>
      <p>Repost by <a href="#" class="text-warning">PPLG</a></p>
    </div>
  </header>

  <!-- Breadcrumb and Content -->
  <div class="container my-4">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb p-3">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($page) ?></li>
      </ol>
    </nav>

    <div class="row">
      <?php
      switch ($page) {
        case 'beranda':
          include "kategori/beranda.php";
          break;
        case 'berita':
          include "kategori/berita.php";
          break;
        case 'detail':
          include "kategori/detail-post.php";
          break;
        case 'kebijakan':
          include "kategori/kebijakan.php";
          break;
        case 'peraturan':
          include "kategori/peraturan.php";
          break;
        case 'galeri':
          include "kategori/galeri.php";
          break;
        case 'struktur-organisasi':
          include "kategori/struktur-organisasi.php";
          break;
        default:
          echo "<div class='col-12 text-center'><h3>Maaf. Halaman tidak ditemukan!</h3></div>";
          break;
      }
      ?>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container text-center">
      <p>&copy; <?= date('Y') ?> PRESSMA NEWS | Repost by <a href="#">TIM PPLG</a></p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
