<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pedoman;
use Illuminate\Http\Request;

class InputpedomanAPIController extends Controller
{
    public function get_all()
    {
        $pedoman = Pedoman::all();
        return response()->json([
            'pedoman'=>$pedoman,
        ]);
    }
}
