<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Bcebook;
use Illuminate\Http\Request;

class EbAPIController extends Controller
{
    public function get_all()
    {
        $bcebook = Bcebook::where('jenis','E-Book')->get();
        return response()->json([
            'bcebook'=>$bcebook,
        ]);
    }
}
