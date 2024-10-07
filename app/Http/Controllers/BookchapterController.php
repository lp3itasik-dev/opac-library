<?php

namespace App\Http\Controllers;
use App\Models\Type;
use App\Models\User;
use App\Models\Bcebook;

use Illuminate\Http\Request;

class BookchapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        $users = User::where('role', 'D')->get();
        return view('bookchapter')->with([
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
        $bcebook=[
            'jenis' => $request->input('jenis'),
            'title' => $request->input('judul'),
            'author' => $request->input('pengarang'),
            'publication_year' => $request->input('tahun_terbit'),
            'publisher' => $request->input('penerbit'),
            'place_of_publication' => $request->input('tempat_terbit'),
            'isbn' => $request->input('isbn'),
            'type_id' => 'E',
            'file_name' => $request->input('file_name'),
            'typefile' => $request->input('typefile'),
        ];
        // dd($repositories);
        $book = Bcebook::create($bcebook);
        return response()->json([
            'book'=>$book,
        ]);
        // return back()->with('message','Data Book Chapter dan E-Book Sudah ditambahkan');
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
