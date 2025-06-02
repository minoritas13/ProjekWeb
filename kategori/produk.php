<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Produk - Alfagift Clone</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="bg-light">

  <!-- Header -->
  <header class="bg-white shadow px-4 py-3 d-flex justify-content-between align-items-center">
    <a href="index.php" class="d-flex align-items-center gap-2 text-decoration-none">
     <img src="assets/logo.png" alt="logo alfagift" style="height: 32px;">
      <span class="badge bg-danger">Kategori</span>
    </a>
    <input type="text" placeholder="Cari produk..." class="form-control w-50">
    <div class="fs-3 text-secondary">🛒</div>
  </header>

  <!-- Konten Produk -->
  <main class="p-4">
    <?php
      // Ambil kategori dari URL, decode dan normalisasi
      $kategori_input = isset($_GET['kategori']) ? urldecode($_GET['kategori']) : 'Produk';

      // Daftar produk per subkategori
      $produk_kategori = [
        "Perlengkapan Dapur & Ruang Makan" => [
          "Piring Plastik", "Sendok Stainless", "Gelas Kopi", "Kompor Mini",
          "Talenan Kayu", "Wajan Anti Lengket", "Pisau Dapur", "Tempat Bumbu"
        ],
        "Bahan Masakan" => [
          "Minyak Goreng", "Garam Dapur", "Gula Pasir", "Kecap Manis",
          "Saus Sambal", "Tepung Terigu", "Bumbu Instan", "Kaldu Bubuk"
        ],
        "Bahan Roti & Kue" => [
          "Tepung Kue", "Ragi Instan", "Butter Cream", "Choco Chips",
          "Keju Parut", "Pewarna Makanan", "Whipped Cream", "Baking Soda"
        ],
        "Bahan Puding & Agar-Agar" => [
          "Agar-Agar Swallow", "Susu Kental Manis", "Susu Evaporasi", "Nutrijell",
          "Jelly Powder", "Topping Buah", "Sirup Gula", "Pewarna Jelly"
        ],
        "Popok Bayi" => [
          "MamyPoko Pants", "Sweety Silver", "Merries Pants", "Goon Smile Baby",
          "Nepia Genki", "Pampers Premium", "Happy Nappy", "Baby Happy"
        ],
        "Susu Bayi" => [
          "SGM Eksplor", "Bebelac 3", "Dancow Batita", "Frisian Flag",
          "Lactogrow", "Nutrilon Royal", "Enfamil", "Morinaga Chil Kid"
        ],
        "Sabun Bayi" => [
          "Zwitsal Liquid", "Pigeon Baby Wash", "Cussons Baby", "Kodomo Shampoo",
          "Sleek Baby", "Bambi Baby Wash", "My Baby Soap", "JOHNSON’S Top-to-Toe"
        ],
        "Alat Kebersihan" => [
          "Sapu Lidi", "Pel Lantai", "Sikat WC", "Ember Plastik",
          "Serokan Air", "Lap Kanebo", "Kemoceng", "Tempat Sampah"
        ],
        "Pewangi" => [
          "Molto Pewangi", "Downy Fresh", "So Klin Softener", "Bayfresh Gel",
          "Stella Spray", "Ambi Pur Mobil", "Harpic", "Vixal"
        ],
        "Tisu" => [
          "Tisu Paseo", "Nice Tisu", "Tessa Tisu", "Tisu Basah Mitu",
          "Tisu Kotak", "Tisu Travel", "Tisu Magic", "Tisu Multi"
        ],
        "Mie Instan" => [
          "Indomie Goreng", "Mie Sedaap Soto", "Supermi Kari", "Mie ABC",
          "Pop Mie", "Sarimi Isi 2", "Mie Lemonilo", "Mie Gaga"
        ],
        "Cemilan" => [
          "Chitato", "Qtela", "Taro Net", "Kusuka",
          "Oishi", "Beng-Beng", "SilverQueen", "Tic Tac"
        ],
        "Biskuit" => [
          "Roma Kelapa", "Good Time", "Marie Regal", "Oreo",
          "Nabati", "Biskuat", "Slai O’lai", "Tiger"
        ],
        "Permen" => [
          "Permen Kopiko", "Permen Yupi", "Mint Relaxa", "Golia",
          "Nano-Nano", "Sugus", "Fox's Crystal", "Mentos"
        ],
        "Air Mineral" => [
          "Aqua 600ml", "Le Minerale", "Cleo", "Nestle Pure Life",
          "Club", "Ades", "Pristine", "Vit"
        ],
        "Kopi" => [
          "Kopi Kapal Api", "Kopi ABC", "Good Day", "Torabika",
          "Luwak White Koffie", "Nescafe Sachet", "Kopiko 78", "JJ Royal Drip"
        ],
        "Teh" => [
          "Teh Botol Sosro", "Teh Pucuk", "Sariwangi", "Teh Celup Sosro",
          "Teh Kotak", "Teh Rio", "Teh Cap Botol", "Teh Hijau Kepala Djenggot"
        ],
        "Susu" => [
          "Ultra Milk", "Bear Brand", "Frisian Flag UHT", "Indomilk",
          "Greenfields", "Diamond Susu", "Susu Kurma", "Milku"
        ],
        "Makanan Beku" => [
          "Nugget So Good", "Sosis Kanzler", "Bakso Frozen", "Dimsum Beku",
          "Kentang Goreng", "Tempura Ebi", "Ayam Ungkep", "Cakwe Frozen"
        ],
        "Sayur Segar" => [
          "Bayam", "Wortel", "Sawi Putih", "Tomat",
          "Cabai Rawit", "Bawang Merah", "Kentang", "Timun"
        ],
        "Buah Segar" => [
          "Pisang", "Apel Fuji", "Jeruk Medan", "Semangka",
          "Anggur", "Melon", "Mangga", "Nanas"
        ],
        "Daging" => [
          "Daging Sapi", "Daging Ayam", "Ikan Lele", "Udang Segar",
          "Cumi Segar", "Bakso Sapi", "Tulang Ayam", "Hati Ayam"
        ],
        "Shampo" => [
          "Sunsilk", "Pantene", "Clear Men", "Head & Shoulders",
          "Lifebuoy", "Natur", "Rejoice", "Tresemme"
        ],
        "Sabun Mandi" => [
          "Lifebuoy", "Lux", "Dettol", "Biore",
          "Shinzui", "Palmolive", "Dove", "Sebamed"
        ],
        "Pasta Gigi" => [
          "Pepsodent", "Ciptadent", "Sensodyne", "Formula",
          "Colgate", "Enzim", "Closeup", "Oral B"
        ],
        "Deodoran" => [
          "Rexona", "Nivea", "Dove Deodorant", "Gatsby Roll On",
          "Axe Deo", "Marina Deo", "Scion", "Nuvo Deo"
        ],
        "Masker" => [
          "Masker Sensi", "Masker Duckbill", "Masker Medis", "Masker Kain",
          "Masker 3ply", "Masker KF94", "Masker Anak", "Masker KN95"
        ],
        "Obat-obatan" => [
          "Paracetamol", "Bodrex", "Promag", "Tolak Angin",
          "Antangin", "Neuralgin", "OBH Combi", "Minyak Kayu Putih"
        ],
        "Vitamin" => [
          "Imboost", "You C1000", "Vitacimin", "Enervon C",
          "Redoxon", "Hemaviton", "Blackmores", "Ever E"
        ],
        "Alat Tulis" => [
          "Pulpen Standard", "Pensil 2B", "Penghapus", "Penggaris",
          "Buku Tulis", "Spidol", "Stabilo", "Binder"
        ],
        "Mainan" => [
          "Balok Kayu", "Robot Mini", "Boneka Teddy", "Mobilan",
          "Lego Mini", "Puzzle Anak", "Bola Plastik", "Layang-layang"
        ],
        "Elektronik Ringan" => [
          "Senter LED", "Stop Kontak", "Kipas Mini", "Lampu Bohlam",
          "Charger HP", "Kabel Data", "Power Bank", "Speaker Bluetooth"
        ],
        "Makanan Kucing" => [
          "Whiskas", "Felibite", "Me-O", "Pro Plan",
          "Royal Canin", "Bolt", "SmartHeart", "Maxi"
        ],
        "Pasir Kucing" => [
          "Pasir Zeolit", "Pasir Wangi", "Pasir Kristal", "Pasir Bentonit",
          "Pasir Gumpal", "Pasir Organik", "Pasir Natural", "Pasir Wood Pellet"
        ],
        "Makanan Anjing" => [
          "Pedigree", "Dog Choize", "Pro Plan Dog", "Royal Canin Dog",
          "Happy Dog", "Bolt Dog Food", "Chappi", "Cesar"
        ]
      ];

      // Normalisasi & pencocokan
      $kategori_ditemukan = null;
      foreach ($produk_kategori as $key => $value) {
        if (strtolower(trim($key)) === strtolower(trim($kategori_input))) {
          $kategori_ditemukan = $key;
          break;
        }
      }

      $produk = [];
      if ($kategori_ditemukan) {
        foreach ($produk_kategori[$kategori_ditemukan] as $nama_produk) {
          $produk[] = [$nama_produk, "Rp " . number_format(rand(5000, 50000), 0, ',', '.')];
        }
      } else {
        $kategori_ditemukan = $kategori_input;
        $produk[] = ["Produk tidak ditemukan", "Rp 0"];
      }

      echo "<h2 class='h5 fw-bold mb-4'>Produk untuk: $kategori_ditemukan</h2>";
    ?>

    <div class="row g-3">
      <?php
        foreach ($produk as $item) {
          echo "
          <div class='col-6 col-md-3'>
            <div class='bg-white p-3 rounded shadow-sm text-center h-100'>
              <div class='w-100 bg-secondary bg-opacity-10 d-flex align-items-center justify-content-center mb-2' style='height: 100px;'>
                <img src='default.png' alt='Gambar Produk' style='max-height: 100%; max-width: 100%; object-fit: contain;'>
              </div>
              <p class='small fw-semibold mb-1'>{$item[0]}</p>
              <p class='text-danger fw-bold'>{$item[1]}</p>
              <button class='btn btn-danger btn-sm mt-2'>Beli</button>
            </div>
          </div>";
        }
      ?>
    </div>
  </main>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
