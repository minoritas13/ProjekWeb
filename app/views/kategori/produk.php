<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
  <?php $no = 1; ?>
  <?php foreach ($data['barang'] as $barang): ?>
    <div class="bg-white rounded-lg shadow p-4 hover:shadow-lg transition">
      <div class="text-sm text-gray-500 mb-1">#<?= $no++; ?></div>
      <h2 class="text-lg font-semibold text-gray-800 mb-2"><?= $barang['nama']; ?></h2>
      <p class="text-gray-700 mb-1">
        <span class="font-medium">Harga:</span>
        Rp<?= number_format($barang['harga'], 0, ',', '.'); ?>
      </p>
      <p class="text-gray-700">
        <span class="font-medium">Stok:</span> <?= $barang['stok']; ?>
      </p>
    </div>
  <?php endforeach; ?>
</div>
