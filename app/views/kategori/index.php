<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kategori</title>
  <!-- Bootstrap 5.3.6 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  <style>
    .submenu {
      display: none;
      position: absolute;
      left: 100%;
      top: 0;
      background-color: white;
      padding: 1rem;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      min-width: 250px;
      z-index: 1050;
    }
    .group:hover .submenu {
      display: block;
    }
    .group {
      position: relative;
    }
    .hover-bg-light:hover {
      background-color: #f8f9fa;
    }
  </style>
</head>
<body class="bg-light">
  <!-- Main Content -->
  <main class="d-flex min-vh-100">

    <!-- Sidebar Kategori -->
    <aside class="w-25 bg-white shadow-sm p-4">
      <h2 class="h6 fw-semibold mb-4">Kategori</h2>
      <ul class="list-unstyled small text-secondary">
        <?php
          $kategori = [
            "Kebutuhan Dapur" => [
              "Perlengkapan Dapur & Ruang Makan",
              "Bahan Masakan",
              "Bahan Roti & Kue",
              "Bahan Puding & Agar-Agar"
            ],
            "Kebutuhan Ibu & Anak" => ["Popok Bayi", "Susu Bayi", "Sabun Bayi"],
            "Kebutuhan Rumah" => ["Alat Kebersihan", "Pewangi", "Tisu"],
            "Makanan" => ["Mie Instan", "Cemilan", "Biskuit", "Permen"],
            "Minuman" => ["Air Mineral", "Kopi", "Teh", "Susu"],
            "Produk Segar & Beku" => ["Makanan Beku", "Sayur Segar", "Buah Segar", "Daging"],
            "Personal Care" => ["Shampo", "Sabun Mandi", "Pasta Gigi", "Deodoran"],
            "Kebutuhan Kesehatan" => ["Masker", "Obat-obatan", "Vitamin"],
            "Lifestyle" => ["Alat Tulis", "Mainan", "Elektronik Ringan"],
            "Pet Foods" => ["Makanan Kucing", "Pasir Kucing", "Makanan Anjing"]
          ];

          foreach ($kategori as $nama => $sub) {
            echo "<li class='group mb-2'>";
            echo "<div class='p-2 rounded hover-bg-light fw-medium' style='cursor:pointer;'>$nama</div>";
            echo "<div class='submenu rounded'>";
            echo "<h6 class='fw-semibold mb-2' style='color: #66BB6A;'>$nama</h6>";
            echo "<ul class='list-unstyled small text-dark'>";
            foreach ($sub as $s) {
              $link = "produk.php?kategori=" . urlencode($s);
              echo "<li><a href='$link' class='text-primary text-decoration-none d-block py-1'>{$s}</a></li>";
            }
            echo "</ul>";
            echo "</div>";
            echo "</li>";
          }
        ?>
      </ul>
    </aside>

    <!-- Area Kosong -->
    <section class="w-75 p-4">
      <p class="text-muted">Arahkan kursor ke kategori di kiri dan klik subkategori untuk melihat produk.</p>
    </section>

  </main>


</body>
</html>
