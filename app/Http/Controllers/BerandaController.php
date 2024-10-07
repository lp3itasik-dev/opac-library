<?php

namespace App\Http\Controllers;

use App\Models\Repositories;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
       $tugas_akhir = Repositories::where('type_id', 3)->get();
       $kkn = Repositories::where('type_id', 2)->get();
       $kki = Repositories::where('type_id', 1)->get();
       $pkm = Repositories::where('type_id', 0)->get();
       return view('welcome')->with([
           'tugas_akhir'=>$tugas_akhir,
           'kkn'=>$kkn,
           'kki'=>$kki,
           'pkm'=>$pkm,
       ]);
    }
}
