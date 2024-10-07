<?php

namespace App\Http\Controllers;

use App\Models\Detrepo;
use App\Models\Inputrepo;
use App\Models\Repositories;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;

class InputrepoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repositories = Inputrepo::all();
        $types = Type::all();
        $users = User::where('role', 'D')->get();
        // $types = Type::where('id', 1)->first();
        return view('inputrepo')->with([
            'repositories'=>$repositories,
            'types'=>$types,
            'users'=>$users
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
        $repositories=[
            'series' => date('Ymdhis'),
            'title' => $request->input('title'),
            'type_id' => $request->input('type'),
            'major' => $request->input('major'),
            'abstract' => $request->input('abstract'),
            'subject' => $request->input('subject'),
            'key_word' => $request->input('key_word'),
            'lecturer' => $request->input('lecturer'),
            'student' => $request->input('student'),
            'student_name' => $request->input('student_name'),
        ];
        $detrepo=[
            'series' => date('Ymdhis'),
            'file_name' => $request->input('file_name'),
            'typefile' => $request->input('typefile'),
        ];
        // dd($repositories);
        Inputrepo::create($repositories);
        $detail_repo = Detrepo::create($detrepo);
        // return back()->with('message','Data Type Sudah ditambahkan');
        return response()->json([
            'repository' => $repositories,
            'detail_repo' => $detail_repo,
        ]);
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
