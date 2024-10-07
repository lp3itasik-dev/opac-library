<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Bcebook;
use Illuminate\Http\Request;

class BcAPIController extends Controller
{
    public function get_all()
    {
        $bcebook = Bcebook::where('jenis','Book Capther Dosen')->get();
        return response()->json([
            'bcebook'=>$bcebook,
        ]);
    }
}
