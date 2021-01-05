<?php

namespace App\Http\Controllers;

use App\Models\eloquent;
use Illuminate\Http\Request;

class eloquentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eloquent = eloquent::all();
        return view('eloquent.index', compact('eloquent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eloquent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // alidasi
        $request->validate([
            'judul' => 'required|min:2',
            'isi' => 'required',
        ]);
        // cara 1
        $request = eloquent::create(['judul' => $request->judul, 'isi' => $request->isi]);

        return redirect('/eloquent')->with('status', 'Data Sudah berhasil di tambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\eloquent  $eloquent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eloquent = eloquent::find($id);
        return view('eloquent.show', compact('eloquent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\eloquent  $eloquent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eloquent = eloquent::find($id);
        return view('eloquent.update', compact('eloquent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\eloquent  $eloquent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, eloquent $eloquent)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);
        $eloquent = eloquent::where('id', $eloquent->id)
                            ->update(['Judul' => $request->judul, 'isi' => $eloquent->isi]);
        return redirect('/eloquent')->with('status', 'Data Sudah berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\eloquent  $eloquent
     * @return \Illuminate\Http\Response
     */
    public function destroy(eloquent $eloquent)
    {
        $eloquent->delete();
        return redirect('/eloquent')->with('status', 'Data Sudah berhasil di hapus!');
    }
}
