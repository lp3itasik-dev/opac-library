<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        // $types = Type::where('id', 1)->get();
        // $types = Type::where('id', 1)->first();
        return view('typerepo')->with([
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
            'name' => ['required'],
            'type' => ['required']
        ], [
            'name.required' => 'Kolom nama tidak boleh kosong.',
            'type.required' => 'Kolom tipe tidak boleh kosong.',
        ]);

        $data=[
            'name' => $request->input('name'),
            'type' => $request->input('type'),
        ];
        // dd($data);
        Type::create($data);
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
        $type = Type::findOrFail($id);
        return view('pages.backend.types.up')->with([
            'type'=>$type
        ]);
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
        $request->validate([
            'name' => ['required'],
        ], [
            'name.required' => 'Kolom Type tidak boleh kosong.',
        ]);

        $data=[
            'name' => $request->input('name'),
        ];

        $type = Type::findOrFail($id);

        if ($type) {
            $type->update($data);
            return redirect()->route('types.index')->with('message', 'Data Type Sudah diupdate');
        } else {
            return redirect()->route('types.index')->with('error', 'Data Type tidak ditemukan');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = Type::findOrFail($id);
        $type->delete();
        return back()->with('message_delete','Data Type Sudah dihapus');
    }
}
