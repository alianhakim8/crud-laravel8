<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="mt-5 mb-5 container">
    <h3>Edit Pegawai</h3>
    <a href="/pegawai" class="nav-link">Kembali</a>

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}" />
            <label for="nama_pegawai">Nama</label>
            <input type="text" name="nama" value="{{ $p->pegawai_nama }}" required class="form-control">
            <label for="jabatan">Jabatan</label>
            <input type="text" name="jabatan" value="{{ $p->pegawai_jabatan }}" required class="form-control" />
            <label for="umur">Umur</label>
            <input type="number" name="umur" value="{{ $p->pegawai_umur }}" required class="form-control">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" required class="form-control">{{ $p->pegawai_alamat }}</textarea>
            <input type="submit" value="Simpan Data" class="btn btn-primary mt-3">
        </form>
    @endforeach

</body>

</html>
