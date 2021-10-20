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
    <h3>Data Pegawai</h3>
    <a href="/pegawai" class="nav-link">Kembali</a>


    <form action="/pegawai/store" method="POST">
        {{ csrf_field() }}

        <input type="hidden" name="id" />
        <label for="nama_pegawai">Nama</label>
        <input type="text" name="nama" required class="form-control">
        <label for="jabatan">Jabatan</label>
        <input type="text" name="jabatan" required class="form-control" />
        <label for="umur">Umur</label>
        <input type="number" name="umur" required class="form-control">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" required class="form-control"></textarea>
        <input type="submit" value="Simpan Data" class="btn btn-primary mt-3">
    </form>
</body>

</html>
