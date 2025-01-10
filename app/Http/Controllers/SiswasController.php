<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class SiswasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //untuk memgakses/mewajibkan ke login
     public function __construct()
    {
        $this->middleware('auth');
    }

    //untuk menambahkan data
    public function index()
    {

            $siswa = siswa:: all();
            return view('siswa.index',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //untuk menambahkan data
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //untuk proses penyimpanan data
    public function store(Request $request)
    {
        $siswa = new siswa;
        $siswa->nis =$request->nis;
        $siswa->nama =$request->nama;
        $siswa->jenis_kelamin =$request->jenis_kelamin;
        $siswa->kelas =$request->kelas;
        $siswa->save();

        return redirect()->route('siswa.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //untuk menampilkan data
    public function show($id)
    {
        $siswa = siswa::findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //untuk mengedit data
    public function edit($id)
    {
        $siswa = siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //untuk mengaupdate data
    public function update(Request $request, $id)
    {
        $siswa = siswa::findOrFail($id);
        $siswa->nis =$request->nis;
        $siswa->nama =$request->nama;
        $siswa->jenis_kelamin =$request->jenis_kelamin;
        $siswa->kelas =$request->kelas;
        $siswa->save();

        return redirect()->route('siswa.index')->with('success', 'Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //untuk menghapus data
    public function destroy($id)
    {
        $siswa = siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index')->with('succes', 'Data Berhasil Dihapus');
    }
}
