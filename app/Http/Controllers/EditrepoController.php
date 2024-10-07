<?php

namespace App\Http\Controllers;

use App\Models\Repositories;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;

class EditrepoController extends Controller
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
        $users = User::where('role', 'D')->get();
        return view('editrepo')->with([
            'repositories' => $repositories,
            'types' => $types,
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
            'title' => $request->input('title'),
            'type_id' => $request->input('type_id'),
            'major' => $request->input('major'),
            'lecturer' => $request->input('lecturer'),
            'student' => $request->input('student'),
            'student_name' => $request->input('student_name'),
        ];

        $repository = Repositories::findOrFail($id);

        if ($repository) {
            $repository->update($data);
            return redirect()
                ->route('editrepo.index')
                ->with('message', 'Data Repository Sudah diupdate');
        } else {
            return redirect()
                ->route('editrepo.index')
                ->with('error', 'Data Repository tidak ditemukan');
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
        $repo = Repositories::findOrFail($id);
        $repo->delete();
        return back()->with('message_delete','Data Repositori Sudah dihapus');
    }
}
