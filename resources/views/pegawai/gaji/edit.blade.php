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
    <h3>Edit Gaji Pegawai</h3>
    <a href="/pegawai/gaji" class="nav-link">Kembali</a>

    @foreach ($gaji as $g)
        <form action="/pegawai/gaji/update" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $g->id }}"><br>
            <label for="nama_pegawai"> Nama Pegawai </label>
            <input type="text" name="nama_pegawai" value="{{ $g->nama_pegawai }}" required class="form-control"
                id="nama_pegawai">
            <label for="nominal_gaji" class="mt-3"> Nominal Gaji</label>
            <input type="number" name="nominal" value="{{ $g->nominal }}" required class="form-control"
                id="nominal_gaji">
            <input type="submit" value="Simpan Data" class="btn btn-primary mt-3">
        </form>
    @endforeach

</body>

</html>
