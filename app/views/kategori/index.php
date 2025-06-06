<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Kategori</title>
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