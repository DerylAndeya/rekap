<form action="{{ route('barang.store') }}" method="post">
    @csrf
    <label for="nama_barang">Nama Barang:</label>
    <input type="text" name="nama_barang" required><br>

    <label for="jenis_barang">Jenis Barang:</label>
    <input type="text" name="jenis_barang" required><br>

    <label for="harga">Harga:</label>
    <input type="number" name="harga" required><br>

    <label for="stock">Stock:</label>
    <input type="number" name="stock" required><br>

    <button type="submit">Submit</button>
</form>