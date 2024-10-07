<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Inputrepo;
use Illuminate\Http\Request;

class InputrepoAPIController extends Controller
{
    public function get_all()
    {
        $repositories = Inputrepo::all();
        return response()->json([
            'repositories'=>$repositories,
        ]);
    }
}
