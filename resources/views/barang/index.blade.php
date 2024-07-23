<!DOCTYPE html>
<html>

<head>
    <title>Data Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="my-4">Data Barang</h1>
        <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Barcode</th>
                    <th>Nama</th>
                    <th>Departmen</th>
                    <th>UOM</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->barcode }}</td>
                        <td>{{ $post->nama }}</td>
                        <td>{{ $post->departmen }}</td>
                        <td>{{ $post->uom }}</td>
                        <td>{{ $post->stok }}</td>
                        <td>
                            <a href="{{ route('barang.show', $post->id) }}" class="btn btn-info btn-sm">Lihat</a>
                            <a href="{{ route('barang.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('barang.destroy', $post->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
