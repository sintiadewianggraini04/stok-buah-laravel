<!DOCTYPE html>
<html>
<head>
    <title>Stok Buah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Stok Buah</h2>

    <a href="/buah/create" class="btn btn-primary mb-3">+ Tambah Buah</a>

    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        @foreach($buah as $b)
        <tr>
            <td>{{ $b->nama }}</td>
            <td>Rp {{ number_format($b->harga) }}</td>
            <td>{{ $b->stok }}</td>

            <td>
                <a href="/buah/{{ $b->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                <form action="/buah/{{ $b->id }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>