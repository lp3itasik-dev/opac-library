<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Repositories;
use Illuminate\Http\Request;

class RepoController extends Controller
{
    public function get_all()
    {
        $repositories = Repositories::all();
        return response()->json([
            'repositories'=>$repositories,
        ]);
    }
}
