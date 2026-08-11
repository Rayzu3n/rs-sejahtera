<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Dokter - RS Sejahtera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <div class="mb-3">
            <h1>RS Sejahtera</h1>
            <h2>Edit Data Dokter</h2>
        </div>

        <form action="{{ route('dokter.update', $dokter->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div>
                <label for="nama_dokter" class="form-label">Nama Dokter</label>

                <input
                    class="form-control"
                    type="text"
                    id="nama_dokter"
                    name="nama_dokter"
                    value="{{ old('nama_dokter', $dokter->nama_dokter) }}"
                    required>
            </div>

            <br>

            <div>
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>

                <select
                    id="jenis_kelamin"
                    name="jenis_kelamin"
                    class="form-select"
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
                <label for="spesialisasi" class="form-label">Spesialisasi</label>

                <select
                    id="spesialisasi"
                    name="spesialisasi"
                    class="form-select"
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
                <label for="nomor_telepon" class="form-label">Nomor Telepon</label>

                <input
                    type="text"
                    id="nomor_telepon"
                    name="nomor_telepon"
                    class="form-control"
                    value="{{ old('nomor_telepon', $dokter->nomor_telepon) }}"
                    required>
            </div>

            <br>

            <div>
                <label for="alamat" class="form-label">Alamat</label>

                <textarea
                    id="alamat"
                    name="alamat"
                    class="form-control"
                    rows="3"
                    required>{{ old('alamat', $dokter->alamat) }}</textarea>
            </div>

            <br>

            <button type="submit" class="btn btn-primary">
                Simpan Perubahan
            </button>

            <a href="{{ route('dokter.index') }}" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>