<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypesController extends Controller
{
    public function get_all()
    {
        $types = Type::all();
        return response()->json([
            'types'=>$types,
        ]);
    }
}
