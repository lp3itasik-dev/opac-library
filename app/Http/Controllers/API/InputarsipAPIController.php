<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Arsip;
use Illuminate\Http\Request;

class InputarsipAPIController extends Controller
{
    public function get_all()
    {
        $arsip = Arsip::all();
        return response()->json([
            'arsip'=>$arsip,
        ]);
    }
}
