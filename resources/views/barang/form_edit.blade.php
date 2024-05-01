@isset($barang)
    <form action="{{ route('barang.update', ['barang' => $barang->id]) }}" method="post">
        @csrf
        @method('PATCH')
        <label for="nama_barang">Nama barang:</label>
        <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" required><br>

        <label for="jenis_barang">Jenis barang:</label>
        <input type="text" name="jenis_barang" value="{{ $barang->jenis_barang }}" required><br>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" value="{{ $barang->harga }}" required><br>

        <label for="stock">Harga:</label>
        <input type="number" name="stock" value="{{ $barang->stock }}" required><br>

        <button type="submit">Submit</button>
    </form>
@endisset