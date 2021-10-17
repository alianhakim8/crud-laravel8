<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GajiPegawaiController extends Controller
{
    public function index()
    {
        $gaji = DB::table('gaji_pegawai')->get();

        return view('pegawai/gaji/index', ['pegawai' => $gaji]);
    }

    public function tambah()
    {
        return view('pegawai/gaji/tambah');
    }

    public function store(Request $request)
    {
        DB::table('gaji_pegawai')->insert([
            'nama_pegawai' => $request->nama,
            'nominal_gaji' => $request->nominal
        ]);

        return redirect('/pegawai/gaji');
    }

    public function edit($id)
    {
        $gaji = DB::table('gaji_pegawai')->where('id_gaji', $id)->get();

        return view('pegawai/gaji/edit', [
            'gaji' => $gaji
        ]);
    }

    public function update(Request $request)
    {
        DB::table('gaji_pegawai')->where('id_gaji', $request->id)->update([
            'nama_pegawai' => $request->nama,
            'nominal_gaji' => $request->nominal
        ]);

        return redirect('/pegawai/gaji');
    }

    public function hapus($id)
    {
        DB::table('gaji_pegawai')->where('id_gaji', $id)->delete();

        return redirect('/pegawai/gaji');
    }
}
