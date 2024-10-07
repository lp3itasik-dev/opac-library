<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Bcebook;
use Illuminate\Http\Request;

class VbcebookAPIController extends Controller
{
    public function get_all()
    {
        $bcebook = Bcebook::all();
        return response()->json([
            'bcebook'=>$bcebook,
        ]);
    }
}
