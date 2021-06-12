<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use App\Models\bukum;
use App\Exports\ExportData;
use App\Models\jenisbukum;
use App\Http\Controllers\Controller;


class bukuc extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = bukum::all();
        $buku = DB::table('buku')->join('jenis_buku', 'jenis_buku.id', '=', 'buku.id') ->get();
        return view('buku0256', ['kirim'=> $buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku_tambah0256');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        bukum::create([
            'id' => $request-> id,
            'judul' => $request-> judul,
            'tahun_terbit' => $request-> tahun_terbit,
        ]);

        return redirect('buku0256');
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
        $ambil = bukum::find($id);
        return view ('edit_buku0256', ['ambil'=> $ambil]);
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
        $ambil = bukum::find($id);
        $ambil->id = $request->id;
        $ambil->judul = $request ->judul;
        $ambil->tahun_terbit = $request ->tahun_terbit;
        $ambil ->save();

        return redirect('buku0256');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = bukum::find($id);
        $hapus->delete();

        return redirect('buku0256');
    }

    public function export_excel()
	{
		return Excel::download(new ExportData, 'Data_1461900256.xlsx');
	}
}
