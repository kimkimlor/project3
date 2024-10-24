<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>

    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <label for="nama">Nama Produk:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" id="deskripsi" required></textarea><br><br>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" step="0.01" required><br><br>

        <label for="stok">Stok:</label>
        <input type="number" name="stok" id="stok" required><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
