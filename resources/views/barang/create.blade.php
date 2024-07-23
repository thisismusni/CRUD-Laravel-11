<!DOCTYPE html>
<html>

<head>
    <title>Create Barang</title>
</head>

<body>
    <h1>Create Barang</h1>
    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div>
            <label for="barcode">Barcode:</label>
            <input type="text" id="barcode" name="barcode" required>
        </div>
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="departmen">Departmen:</label>
            <input type="text" id="departmen" name="departmen" required>
        </div>
        <div>
            <label for="uom">UOM:</label>
            <input type="text" id="uom" name="uom" required>
        </div>
        <div>
            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok" required>
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
</body>

</html>
