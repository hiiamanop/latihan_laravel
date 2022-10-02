<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FromController extends Controller
{
    //fungsi menamilkan form register
    public function register()
    {
        return view('form.register');
    }

    public function postData(Request $request)
    {
        $username = $request->username; //$request->username ini dapat dari inputan form yang name nya = username
        $password = Hash::make($request->password); //$request->password ini dapat dari inputan form yang name nya = password

        return view('form.output', compact('username', 'password')); //compact berfungsi untuk mengirimkan data ke view
    }

    // fungsi menampilkan luas
    public function hitungLuas(Request $request)
    {
        $panjang = $request->panjang;
        $lebar = request('lebar'); //request() => function untuk menerima inputan dari form/api/dsb

        $luas = $panjang * $lebar;

        return view('form.luas', compact('panjang', 'lebar', 'luas'));
    }

    public function formLuas()
    {
        return  view('form.hitung');
    }

    // fungsi menampilkan nilai
    public function formNilai()
    {
        //dd("KKK");
        return view('form.nilai');
    }

    public function tampilNilai(Request $request)
    {
        $UTS = request('UTS');
        $UAS = request('UAS');

        if ($UTS >= 85 && $UTS <= 100) {
            $keterangan1  = "A";
        } else if ($UTS >= 70 && $UTS <= 84) {
            $keterangan1 = 'B';
        } else if ($UTS >= 60 && $UTS <= 69) {
            $keterangan1 = 'C';
        } else if ($UTS >= 40 && $UTS <= 59) {
            $keterangan1 = 'D';
        } else {
            $keterangan1 = "tidak lulus";
        }
        
        if ($UAS >= 85 && $UAS <= 100) {
            $keterangan2  = "A";
        } else if ($UAS >= 70 && $UAS <= 84) {
            $keterangan2 = 'B';
        } else if ($UAS >= 60 && $UAS <= 69) {
            $keterangan2 = 'C';
        } else if ($UAS >= 40 && $UAS <= 59) {
            $keterangan2 = 'D';
        } else {
            $keterangan2 = "tidak lulus";
        }

        return view('form.tampilNilai', compact('UAS', 'UTS', 'keterangan1', 'keterangan2'));

    }
}
