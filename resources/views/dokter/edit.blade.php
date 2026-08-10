<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Dokter - RS Sejahtera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <h1>RS Sejahtera</h1>

    <h2>Edit Data Dokter</h2>

    <form action="{{ route('dokter.update', $dokter->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label for="nama_dokter">Nama Dokter</label>

            <input
                type="text"
                id="nama_dokter"
                name="nama_dokter"
                value="{{ old('nama_dokter', $dokter->nama_dokter) }}"
                required>
        </div>

        <br>

        <div>
            <label for="jenis_kelamin">Jenis Kelamin</label>

            <select
                id="jenis_kelamin"
                name="jenis_kelamin"
                required>
                <option value="">-- Pilih Jenis Kelamin --</option>

                <option value="Laki-laki"
                    {{ old('jenis_kelamin', $dokter->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>
                    Laki-laki
                </option>

                <option value="Perempuan"
                    {{ old('jenis_kelamin', $dokter->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>
                    Perempuan
                </option>
            </select>
        </div>

        <br>

        <div>
            <label for="jenis_kelamin">Spesialisasi</label>

            <select
                id="spesialisasi"
                name="spesialisasi"
                required>
                <option value="">-- Pilih Spesialisasi --</option>

                <option value="Umum"
                    {{ old('spesialisasi', $dokter->spesialisasi) == 'Umum' ? 'selected' : '' }}>
                    Umum
                </option>

                <option value="Kandungan"
                    {{ old('spesialisasi', $dokter->spesialisasi) == 'Kandungan' ? 'selected' : '' }}>
                    Kandungan
                </option>

                <option value="Gigi"
                    {{ old('spesialisasi', $dokter->spesialisasi) == 'Gigi' ? 'selected' : '' }}>
                    Gigi
                </option>

                <option value="Dalam"
                    {{ old('spesialisasi', $dokter->spesialisasi) == 'Dalam' ? 'selected' : '' }}>
                    Dalam
                </option>

                <option value="Anak"
                    {{ old('spesialisasi', $dokter->spesialisasi) == 'Anak' ? 'selected' : '' }}>
                    Anak
                </option>

                <option value="Bedah"
                    {{ old('spesialisasi', $dokter->spesialisasi) == 'Bedah' ? 'selected' : '' }}>
                    Bedah
                </option>
            </select>
        </div>

        <br>

        <div>
            <label for="nomor_telepon">Nomor Telepon</label>

            <input
                type="text"
                id="nomor_telepon"
                name="nomor_telepon"
                value="{{ old('nomor_telepon', $dokter->nomor_telepon) }}"
                required>
        </div>

        <br>

        <div>
            <label for="alamat">Alamat</label>

            <textarea
                id="alamat"
                name="alamat"
                rows="3"
                required>{{ old('alamat', $dokter->alamat) }}</textarea>
        </div>

        <br>

        <button type="submit">
            Simpan Perubahan
        </button>

        <a href="{{ route('dokter.index') }}">
            Kembali
        </a>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>