<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrean;
use DB;
use Redirect;

class MesinAntreanController extends Controller
{
    public function mesin(){
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
        return view('mesin_antrean',$data);
    }

    public function post(Request $request)
    {
        $date_default_timezone_set = date_default_timezone_set('Asia/Pontianak'); 
        $date = date('Y-m-d');
        if($request->jenis_pelayanan == 'cs'){
            if(is_null(DB::table('antrean')->select('nomor_antrean')->where('jenis_pelayanan','cs')->whereDate('created_at', $date)->first())){
                DB::table('antrean')->insert([
                    'jenis_pelayanan'=>$request->jenis_pelayanan,
                    'kode_antrean'=>$request->kode_antrean,
                    'nomor_antrean'=> '1',
                    'status'=>$request->status
                ]);
                $id_print = DB::table('antrean')->select(DB::raw("max(id) as id_print"))->first();
                return redirect("mesin_antrean/".$id_print->id_print);
            }else{
                $max_nomor_antrean_cs = DB::table('antrean')->select(DB::raw("max(nomor_antrean) as nomor_antrean"))
                
                ->where('jenis_pelayanan','cs')
                ->whereDate('created_at', $date)
                ->first();

                DB::table('antrean')->insert([
                    'jenis_pelayanan'=>$request->jenis_pelayanan,
                    'kode_antrean'=>$request->kode_antrean,
                    'nomor_antrean'=> $max_nomor_antrean_cs->nomor_antrean+1,
                    'status'=>$request->status
                ]);
                $id_print = DB::table('antrean')->select(DB::raw("max(id) as id_print"))->first();
                return redirect("mesin_antrean/".$id_print->id_print);
            }
        }elseif($request->jenis_pelayanan == 'teller'){
            if(is_null(DB::table('antrean')->select('nomor_antrean')->where('jenis_pelayanan','teller')->whereDate('created_at', $date)->first())){
                DB::table('antrean')->insert([
                    'jenis_pelayanan'=>$request->jenis_pelayanan,
                    'kode_antrean'=>$request->kode_antrean,
                    'nomor_antrean'=> '1',
                    'status'=>$request->status
                ]);
                $id_print = DB::table('antrean')->select(DB::raw("max(id) as id_print"))->first();
                return redirect("mesin_antrean/".$id_print->id_print);

            }else{
                $max_nomor_antrean_teller = DB::table('antrean')->select(DB::raw("max(nomor_antrean) as nomor_antrean"))
                
                ->where('jenis_pelayanan','teller')
                ->whereDate('created_at', $date)
                ->first();

                DB::table('antrean')->insert([
                    'jenis_pelayanan'=>$request->jenis_pelayanan,
                    'kode_antrean'=>$request->kode_antrean,
                    'nomor_antrean'=> $max_nomor_antrean_teller->nomor_antrean+1,
                    'status'=>$request->status
                ]);
                $id_print = DB::table('antrean')->select(DB::raw("max(id) as id_print"))->first();
                return redirect("mesin_antrean/".$id_print->id_print);
            }
        }
    }
    
    public function print($id)
    {
        $data['data_print'] = DB::table('antrean')->where('id',$id)->first();
        return view('print_nomor_antrean',$data);
    }
}
