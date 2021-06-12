<?php

namespace App\Exports;

use App\Models\bukum;
use App\Models\jenisbukum;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;


class ExportData implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $buku = bukum::all();
        $buku = DB::table('buku')->join('jenis_buku', 'jenis_buku.id', '=', 'buku.id') ->get(); //Join Judul buku dengan Nama Kategori
        return $buku;
    }
}
