<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrean;
use DB;
use Auth;

class AntreanController extends Controller
{
    public function index()
    {
        $date_default_timezone_set = date_default_timezone_set('Asia/Pontianak'); 
        $date = date('Y-m-d');
        // cs
        $nomor_antrean_cs_sekarang = DB::table('antrean')
            ->select('*',DB::raw('min(id) AS min_id'))
            ->where('jenis_pelayanan','cs')
            ->Where('status','menunggu')
            ->first();
        $data['nomor_antrean_cs_sekarang'] = $nomor_antrean_cs_sekarang;
        $data['nomor_antrean_cs_sekarang_lowercase'] = strtolower($nomor_antrean_cs_sekarang->kode_antrean);


        $data['end_nomor_antrean_cs'] = DB::table('antrean')
                    ->select('kode_antrean',DB::raw('max(nomor_antrean) AS end_nomor_antrean'))
                    ->Where('jenis_pelayanan','cs')
                    ->where('status','menunggu')
                    ->orderBy('antrean.nomor_antrean','ASC')
                    ->first();

        // teller
        $nomor_antrean_teller_sekarang = DB::table('antrean')
            ->select('*',DB::raw('min(id) AS min_id'))
            ->where('jenis_pelayanan','teller')
            ->Where('status','menunggu')
            ->first();
        $data['nomor_antrean_teller_sekarang'] = $nomor_antrean_teller_sekarang;
        $data['nomor_antrean_teller_sekarang_lowercase'] = strtolower($nomor_antrean_teller_sekarang->kode_antrean);
        // dd($data['nomor_antrean_teller_sekarang_lowercase']);

        $data['end_nomor_antrean_teller'] = DB::table('antrean')
                    ->select('kode_antrean',DB::raw('max(nomor_antrean) AS end_nomor_antrean'))
                    ->Where('jenis_pelayanan','teller')
                    ->where('status','menunggu')
                    ->orderBy('antrean.nomor_antrean','ASC')
                    ->first();
        // dd($data['end_nomor_antrean_teller']->kode_antrean);

        // auto refresh
        // SELECT min(created_at) as selanjutnya FROM `antrean` WHERE jenis_pelayanan='teller' and status='menunggu';
        $data['noAntreanTellerSelanjutnya'] = DB::table('antrean')
            ->select(DB::raw('min(created_at) as selanjutnya'))
            ->where('jenis_pelayanan','teller')
            ->where('status','menunggu')
            ->first();
        // SELECT max(updated_at) sebelumnya FROM `antrean` WHERE jenis_pelayanan='teller' and status='selesai';
        $data['noAntreanTellersebelumnya'] = DB::table('antrean')
            ->select(DB::raw('max(updated_at) sebelumnya'))
            ->where('jenis_pelayanan','teller')
            ->where('status','selesai')
            ->first();

        // SELECT COUNT(id) count_id_antrean FROM `antrean` WHERE jenis_pelayanan='teller' and status='selesai';
        $data['count_id_antrean'] = DB::table('antrean')
            ->select(DB::raw('COUNT(id) count_id_antrean'))
            ->where('jenis_pelayanan','teller')
            ->where('status','selesai')
            ->first();
        $data['level'] = Auth::user()->level1;
        $data['no_pelayanan'] = Auth::user()->no_pelayanan;

        return view('antrean.index',$data);
    }

    public function nextNomorAntrean(Request $request, $id_antrean)
    {
        DB::table('antrean')->where('id',$id_antrean)->update([
                'jenis_pelayanan'=>$request->jenis_pelayanan,
                'kode_antrean'=>$request->kode_antrean,
                'nomor_antrean'=>$request->nomor_antrean,
                'status'=>$request->status
            ]);

        if($request->jenis_pelayanan == 'teller'){
            return redirect('teller/antrean');
        }elseif($request->jenis_pelayanan == 'cs'){
            return redirect('cs/antrean');
        }
    }
   
    public function store(Request $request)
    {
        $antrean = new Antrean;
        $antrean->nomor_antrean = request()->nomor_antrean;
        $antrean->status = request()->status;
        $antrean->save();
        return redirect('/');
    }

    public function nomor_antrean_cs()
    {
        $nomor_antrean_cs_sekarang = DB::table('antrean')
            ->select('*',DB::raw('min(id) AS min_id'))
            ->where('jenis_pelayanan','cs')
            ->Where('status','menunggu')
            ->first();
        $data['nomor_antrean_cs_sekarang'] = $nomor_antrean_cs_sekarang;

        return view('antrean.nomor_antrean_cs',$data);
    }

    public function nomor_antrean_teller()
    {
        $nomor_antrean_teller_sekarang = DB::table('antrean')
            ->select('*',DB::raw('min(id) AS min_id'))
            ->where('jenis_pelayanan','teller')
            ->Where('status','menunggu')
            ->first();
        $data['nomor_antrean_teller_sekarang'] = $nomor_antrean_teller_sekarang;
        
        return view('antrean.nomor_antrean_teller',$data);
    }

    public function end_nomor_antrean_teller()
    {
    $data['end_nomor_antrean_teller'] = DB::table('antrean')
                ->select('kode_antrean',DB::raw('max(nomor_antrean) AS end_nomor_teller'))
                ->Where('jenis_pelayanan','teller')
                ->where('status','menunggu')
                ->orderBy('antrean.nomor_antrean','ASC')
                ->first();
        return view('antrean.end_nomor_antrean_teller',$data);
    }
    
    public function end_nomor_antrean_cs()
    {
    $data['end_nomor_antrean_cs'] = DB::table('antrean')
                ->select('kode_antrean',DB::raw('max(nomor_antrean) AS end_nomor_antrean'))
                ->Where('jenis_pelayanan','cs')
                ->where('status','menunggu')
                ->orderBy('antrean.nomor_antrean','ASC')
                ->first();
        return view('antrean.end_nomor_antrean_cs',$data);
    }

    public function destroy($id)
    {
        //
    }
}