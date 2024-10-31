<?php

namespace App\Http\Controllers;

use App\Models\Jalur;
use Illuminate\Http\Request;

class JalurController extends Controller
{
    public function index()
    {
        return view('controllerjalur');
    }

    public function menampilkanDataModel()
    {
        $dataSekolah = Jalur::$sekolah;
        $dataKelas = Jalur::$kelas;
        
        return view('modeljalur', compact('dataSekolah','dataKelas'));
    }

}
