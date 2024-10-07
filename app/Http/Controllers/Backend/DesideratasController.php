<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Desiderata;
use Illuminate\Http\Request;

class DesideratasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desideratas = Desiderata::all();
        return view('pages.backend.desideratas.index')->with([
            'desideratas'=>$desideratas,
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
            'book' => ['required'],
            'author' => ['required'],
        ], [
            'book.required' => 'Kolom Buku tidak boleh kosong.',
            'author.required' => 'Kolom Author tidak boleh kosong.',
        ]);

        $data=[
            'book' => $request->input('book'),
            'author' => $request->input('author'),
        ];
        Desiderata::create($data);
        return back()->with('message','Data Desideratas Sudah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $desideratas = Desiderata::findOrFail($id);
        return view('pages.backend.desideratas.up')->with([
            'desideratas'=>$desideratas
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
            'book' => ['required'],
            'author' => ['required'],
        ], [
            'book.required' => 'Kolom Book tidak boleh kosong.',
            'author.required' => 'Kolom Author tidak boleh kosong.',
        ]);

        $data=[
            'book' => $request->input('book'),
            'author' => $request->input('author'),
        ];

        $desideratas = Desiderata::findOrFail($id);

        if ($desideratas) {
            $desideratas->update($data);
            return redirect()->route('desideratas.index')->with('message', 'Data Desideratas Sudah diupdate');
        } else {
            return redirect()->route('desideratas.index')->with('error', 'Data Desideratas tidak ditemukan');
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
        $desideratas = Desiderata::findOrFail($id);
        $desideratas->delete();
        return back()->with('message_delete','Data Buku Sudah dihapus');
    }
}
