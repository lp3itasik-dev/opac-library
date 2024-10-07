<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Repositories;
use Illuminate\Http\Request;

class EditrepoAPIController extends Controller
{
    public function get_all()
    {
        $repositories = Repositories::with(['userlec','types'])->get();
        return response()->json([
            'repositories'=>$repositories,
        ]);
    }
}
