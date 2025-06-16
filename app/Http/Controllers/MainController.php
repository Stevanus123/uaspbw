<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // public function uas(){
    //     return view('uas');
    // }
    // public function gaji(){
    //     return view('gaji');
    // }
    public function terima(Request $request)
    {
        $nama = $request->nama;
        $usia = $request->usia;
        return view('terima-uas', ['nama' => $nama, 'usia' => $usia]);
    }

    public function cekgaji(Request $request)
    {
        $kar = new Karyawan();
        $kar->nik = $request->nik;
        $kar->nama = $request->nama;
        $kar->gender = $request->gender;
        $kar->email = $request->email;
        $kar->jenis = $request->jenis;
        if ($request->jenis == 'Tetap') {
            $kar->gaji_pokok = 5000000;
            $kar->tunjangan_makan = 110000;
            $kar->potongan_bpjs = 5 / 100 * 5000000;
            $kar->gaji_bersih = 5000000 + 110000 - 5 / 100 * 5000000;
        } else if ($request->jenis == 'Tidak Tetap') {
            $kar->gaji_pokok = 3000000;
            $kar->tunjangan_makan = 66000;
            $kar->potongan_bpjs = 2 / 100 * 3000000;
            $kar->gaji_bersih = 3000000 + 66000 - 2 / 100 * 3000000;
        } else
            return view('gaji');

        $kar->save();

        $kar = Karyawan::get();

        return view('hasil-gaji', ['kar' => $kar]);
    }

    public function hasil_gaji()
    {
        $kar = Karyawan::get();
        return view('hasil-gaji', ['kar' => $kar]);
    }

    public function search(){
        $q = request()->input('q');
        $kar = Karyawan::where('nama', 'LIKE', '%'.$q.'%')->get();
        return view('hasil-gaji', ['kar'=>$kar]);
    }
}
