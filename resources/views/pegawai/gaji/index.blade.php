<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Laravel</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="container mt-5 mb-5">
    <h3>Data Gaji Pegawai</h3>
    <div class="d-flex">
        <a href="/pegawai/" class="nav-link">Data Pegawai</a>
        <a href="/pegawai/gaji/tambah" class="nav-link"> + Tambah Gaji Pegawai</a>
    </div>

    <table class="table">
        <tr>
            <th>Nama Pegawai</th>
            <th>Nominal Gaji</th>
            <th>Aksi</th>
        </tr>
        @foreach ($gaji as $g)
            <tr>
                <td>{{ $g->nama_pegawai }}</td>
                <td>Rp. {{ $g->nominal }}</td>
                <td>
                    <div class="row">
                        <div class="col-1">
                            <a href="/pegawai/gaji/edit/{{ $g->id }}" class="nav-link">Edit</a>
                        </div>
                        <div class="col-6">
                            <a href="/pegawai/gaji/hapus/{{ $g->id }}" class="nav-link">Hapus</a>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
