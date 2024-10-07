<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceAPIController extends Controller
{
    public function get_all()
    {
        $desideratas = Service::all();
        return response()->json([
            'desideratas'=>$desideratas,
        ]);
    }
}
