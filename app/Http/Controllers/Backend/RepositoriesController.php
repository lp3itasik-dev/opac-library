<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Detrepo;
use App\Models\Repositories;
use App\Models\Type;
use Illuminate\Http\Request;

class RepositoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repositories = Repositories::all();
        $types = Type::all();
        // $types = Type::where('id', 1)->get();
        // $types = Type::where('id', 1)->first();
        return view('pages.backend.repositories.index')->with([
            'repositories'=>$repositories,
            'types'=>$types
        ]);

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
        $request->validate([
            'title' => ['required'],
            'type_id' => ['required'],
            'major' => ['required'],
            'abstrak' => ['required'],
        ], [
            'title.required' => 'Kolom Title tidak boleh kosong.',
            'type_id.required' => 'Kolom Title tidak boleh kosong.',
            'major.required' => 'Kolom Title tidak boleh kosong.',
            'abstrak.required' => 'Kolom Abstrak tidak boleh kosong.',
        ]);

        $repositories=[
            'series' => date('Ymdhis'),
            'title' => $request->input('title'),
            'type_id' => $request->input('type_id'),
            'major' => $request->input('major'),
            'abstract' => $request->input('abstrak'),
        ];
        $detrepo=[
            'series' => date('Ymdhis'),
        ];
        // dd($repositories);
        Repositories::create($repositories);
        Detrepo::create($detrepo);
        return back()->with('message','Data Type Sudah ditambahkan');
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
        //
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
        return response()->json([
            'nabil' => 'nabil'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $repo = Repositories::findOrFail($id);
        $repo->delete();
        return back()->with('message_delete','Data Repositori Sudah dihapus');
        // return response()->json($id);
    }
}
