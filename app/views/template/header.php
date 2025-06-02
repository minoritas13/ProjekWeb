<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $data['title'];?></title>
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-white bg-white shadow-sm">
  <div class="container-fluid">

    <!-- Logo -->
    <a class="navbar-brand" href="<?= BASEURL; ?>">
      <img src="img/alfagift-logo.png" alt="Logo" height="30">
    </a>

    <!-- Kategori -->
    <a class="nav-link" href="#"><i class="bi bi-grid"></i> Kategori</a>

    <!-- Search -->
    <form class="d-flex mx-3 w-50">
      <input class="form-control rounded-0" type="search" placeholder="Temukan produk favoritmu disini" aria-label="Search">
      <button class="btn btn-success rounded-0" type="submit"><i class="bi bi-search"></i></button>
    </form>

    <!-- Right Side -->
    <div class="d-flex align-items-center gap-3">
      <a class="nav-link" href="#">Brand</a>
      <a class="nav-link" href="#">Promo</a>
      <a class="nav-link" href="#"><i class="bi bi-cart"></i></a>
      <span class="vr"></span>
      <a class="nav-link" href="#">Daftar</a>
      <a class="nav-link" href="#">Masuk</a>
    </div>

  </div>
</nav>
