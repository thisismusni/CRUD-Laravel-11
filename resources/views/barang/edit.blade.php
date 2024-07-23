<!DOCTYPE html>
<html>

<head>
    <title>Edit Barang</title>
</head>

<body>
    <h1>Edit Barang</h1>
    <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="barcode">Barcode:</label>
            <input type="text" id="barcode" name="barcode" value="{{ $barang->barcode }}" required>
        </div>
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="{{ $barang->nama }}" required>
        </div>
        <div>
            <label for="departmen">Departmen:</label>
            <input type="text" id="departmen" name="departmen" value="{{ $barang->departmen }}" required>
        </div>
        <div>
            <label for="uom">UOM:</label>
            <input type="text" id="uom" name="uom" value="{{ $barang->uom }}" required>
        </div>
        <div>
            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok" value="{{ $barang->stok }}" required>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
</body>

</html>
