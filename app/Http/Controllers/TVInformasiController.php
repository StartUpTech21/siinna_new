<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrean;
use DB;
use Redirect;

class TVInformasiController extends Controller
{
    public function tv(){
        $date_default_timezone_set = date_default_timezone_set('Asia/Pontianak'); 
        $date = date('Y-m-d');
        // cs
        $max_nomor_antrean_cs = DB::table('antrean')->select(DB::raw("max(nomor_antrean) as nomor_antrean"))
                ->where('jenis_pelayanan','cs')
                ->whereDate('created_at', $date)
                ->first();
        $data['max_nomor_antrean_cs_tambah_satu'] = $max_nomor_antrean_cs->nomor_antrean+1;
        
        // teller
        $max_nomor_antrean_teller = DB::table('antrean')->select(DB::raw("max(nomor_antrean) as nomor_antrean"))
                ->where('jenis_pelayanan','teller')
                ->whereDate('created_at', $date)
                ->first();
        $data['max_nomor_antrean_teller_tambah_satu'] = $max_nomor_antrean_teller->nomor_antrean+1;

        return view('tv_informasi', $data);
    }
}
