<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class builderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $builder = DB::table('builder')->get();
        // kirimkan data ke builder.builder
        return view('builder.builder', compact('builder'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('builder.tambah');
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
            'judul' => 'required|min:2',
            'isi' => 'required',
        ]);
        // ada di dokumentasi laravel
        DB::table('builder')->insert([
            // harus satu arrow
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);
        // memakai flash data (Response)
        return redirect('/builder')->with('status', 'Data Sudah berhasil di tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = DB::table('builder')
            ->where('id', $id)
            ->get();
        return view('builder.detail',['detail'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = DB::table('builder')
        ->where('id', $id)
            ->first();
        return view('builder.edit', compact('edit'));
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
            'judul' => 'required',
            'isi' => 'required',
        ]);

        DB::table('builder')
        // , artinya smadengan
        ->where('id', $id)
            // update
            ->update([
                'judul' => $request->judul,
                'isi' => $request->isi
            ]);


        return redirect('/builder')->with('status', 'Data Sudah berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('builder')->where('id', $id)->delete();
        return redirect('/builder')->with('status', 'Data Sudah berhasil di hapus!');
    }
}
