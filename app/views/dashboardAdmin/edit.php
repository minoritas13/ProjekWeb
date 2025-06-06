<div class="max-w-xl mx-auto bg-white shadow p-6 mt-8 rounded">
    <h2 class="text-xl font-bold mb-4">Edit Barang</h2>
    <form action="<?= BASEURL; ?>/dashboardAdmin/edit" method="POST">
        <input type="hidden" name="id" value="<?= $data['barang']['id']; ?>">

        <div class="mb-4">
            <label class="block mb-1 font-medium">Nama Barang</label>
            <input type="text" name="nama" value="<?= $data['barang']['nama']; ?>" class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Harga</label>
            <input type="number" name="harga" value="<?= $data['barang']['harga']; ?>" class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Stok</label>
            <input type="number" name="stok" value="<?= $data['barang']['stok']; ?>" class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <button type="submit" name="update" class="bg-green-600 text-white px-4 py-2 rounded">Simpan Perubahan</button>
        <a href="<?= BASEURL; ?>/dashboardAdmin" class="ml-2 text-gray-500">Batal</a>
    </form>
</div>
