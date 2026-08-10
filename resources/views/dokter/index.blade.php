<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RS Sejahtera</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-4">
        <div>
            <h1>RS Sejahtera</h1>
            <h2>Data Dokter</h2>
        </div>

        @if (session('success'))
        <p>{{ session('success') }}</p>
        @endif

        <a href="{{ route('dokter.create') }}" class="btn btn-primary">+ Tambah Dokter</a>
    </div>
    <br><br>

    <div class="container">
        <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Dokter</th>
                <th>Jenis Kelamin</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Total Saldo</th>
            </tr>
        </thead>
        
        <tbody>
            @forelse ($dokters as $dokter)
            <tr>
                <td>{{ $loop->iteration }}</td>
                
                <td>{{ $dokter->nama_dokter }}</td>
                
                <td>{{ $dokter->jenis_kelamin }}</td>
                
                <td>{{ $dokter->spesialisasi }}</td>

                <td>{{ $dokter->nomor_telepon }}</td>
                
                <td>{{ $dokter->alamat }}</td>
                
                <td>
                    <a href="{{ route('dokter.edit', $dokter->id) }}" class="btn btn-success">
                        Edit
                    </a>

                    <form
                        action="{{ route('dokter.destroy', $dokter->id) }}"
                        method="POST"
                        style="display: inline;">
                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            onclick="return confirm('Yakin ingin menghapus data ini?')"
                            class="btn btn-danger">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7">Belum ada data dokter.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>