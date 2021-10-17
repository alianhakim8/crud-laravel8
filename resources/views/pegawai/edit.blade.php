<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel</title>
</head>
<body>
    <h3>Edit Pegawai</h3>
    <a href="/pegawai">Kembali</a>
    <br>
    <br>
    @foreach ($pegawai as $p)
    <form action="/pegawai/update" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $p->pegawai_id }}"><br>
    Nama <input type="text" name="nama" value="{{ $p ->pegawai_nama }}" required> <br>
    Jabatan <input type="text" name="jabatan" value="{{ $p->pegawai_jabatan }}" required><br>
    Umur <input type="number" name="umur" value="{{ $p->pegawai_umur }}" required> <br>
    Alamat <textarea name="alamat" required>{{ $p->pegawai_alamat }}</textarea>
    <input type="submit" value="Simpan Data">
    </form>
    @endforeach

</body>
</html>