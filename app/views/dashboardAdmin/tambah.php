<div class="container mx-auto px-4 py-6">
    <h2 class="text-xl font-bold mb-4">Tambah Barang</h2>

    <form action="<?= BASEURL; ?>/dashboardAdmin/tambah" method="POST" class="space-y-4">
        <div>
            <label class="block mb-1">Nama Barang</label>
            <input type="text" name="nama" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block mb-1">Harga</label>
            <input type="number" name="harga" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block mb-1">Stok</label>
            <input type="number" name="stok" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan</button>
    </form>
</div>
