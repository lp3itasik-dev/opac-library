<?php

namespace App\Http\Controllers;

use App\Models\Desiderata;
use App\Models\Service;
use Illuminate\Http\Request;

class DesiderataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perPage = 10;

        // Fetch only records where realisasi is empty for the initial view
        $desiderata = Desiderata::where('realisasi', '' )->orWhereNull('realisasi')->get();


        // Paginate all Desiderata records
        $books = Desiderata::where('realisasi', '')->paginate($perPage);

        return view('desiderata')->with([
            'desiderata' => $desiderata,
            'books' => $books, // Use $books instead of compact('books')
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
        $data = [
            'realisasi' => 'R',
        ];

        $desideratas = Service::findOrFail($id);

        if ($desideratas) {
            $desideratas->update($data);
            return response()->json([
                'message' => 'Data buku telah diupdate',
                'reload' => true,
            ]);
        } else {
            return response()->json([
                'message' => 'Data buku tidak diupdate',
                'reload' => true,
            ]);
        }
        // return response()->json($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $desiderata = Service::findOrFail($id);
        $desiderata->delete();
        return back()->with('message_delete', 'Data Buku Sudah dihapus');
    }
}
