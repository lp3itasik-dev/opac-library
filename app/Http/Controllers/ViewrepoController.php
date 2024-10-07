<?php

namespace App\Http\Controllers;

use App\Models\Repositories;
use Illuminate\Http\Request;

class ViewrepoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $repository = Repositories::where('series', $id)->first();

        if (!$repository) {
            // Handle the case where the repository is not found
            return redirect()
                ->route('daftarapproverepo.index')
                ->with('error', 'Repository not found.');
        }

        return view('approverepo.index')->with([
            'repository' => $repository,
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
        // $classes = Classes::all();
        // $student = Student::where('nim', $id)->get();
        $repositories = Repositories::where('series', $id)->first();
        return view('viewrepo')->with([
            'repositories' => $repositories,
            // 'classes' => $classes,
        ]);
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
