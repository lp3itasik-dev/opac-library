<?php

namespace App\Http\Controllers;

use App\Models\Repositories;
use Illuminate\Http\Request;

class SearchrepoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $searchVal = request('search');
        $repositories = Repositories::where('title', 'LIKE','%'.$searchVal.'%')->get();
        return view('search')->with([
            'repositories' => $repositories
        ]);
        // return response()->json($repositories);

        // redirectnya nanti ke search.blade.php cuma menampilkan sesuai dengan yang dicari
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $company = Company::all();
        $repositories = Repositories::where('type_id', $id)->get();
        // $company = Company::where('id', $id)->first();
        return view('search')->with([
            'repositories' => $repositories,
        ]);
        // return view('company.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
