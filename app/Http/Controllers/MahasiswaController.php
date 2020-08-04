<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function DaftarMahasiswa() {
   		$tampil = Mahasiswa::all();
   		return view('daftar-mahasiswa',compact('tampil')); 	
   }
}
