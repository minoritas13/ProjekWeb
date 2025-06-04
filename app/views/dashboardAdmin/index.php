<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6 text-gray-800"><?= $data['title']; ?></h1>

    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full divide-y divide-gray-200 text-sm text-gray-700">
            <thead class="bg-gray-100 text-left">
                <tr>
                    <th class="px-4 py-3 font-medium">ID</th>
                    <th class="px-4 py-3 font-medium">Nama Barang</th>
                    <th class="px-4 py-3 font-medium">Harga (Rp)</th>
                    <th class="px-4 py-3 font-medium">Stok</th>
                    <Th>aksi</Th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php foreach ($data['barang'] as $barang): ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3"><?= $barang['id']; ?></td>
                    <td class="px-4 py-3"><?= $barang['nama']; ?></td>
                    <td class="px-4 py-3"><?= number_format($barang['harga'], 0, ',', '.'); ?></td>
                    <td class="px-4 py-3"><?= $barang['stok']; ?></td>
                    <td> Edit </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="m-5">
<a href="<?= BASEURL; ?>/logout" class="bg-sky-500 rounded p-2">Logout</a>
<a href="<?= BASEURL; ?>/dashboardAdmin/tambah" class="bg-sky-500 rounded p-2">tambah</a>
</div>