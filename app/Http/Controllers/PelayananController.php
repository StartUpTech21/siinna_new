<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelayanan;
use App\Models\Tempat;

class PelayananController extends Controller
{
    public function index()
    {
        $data['list_pelayanan'] = Pelayanan::select('pelayanan.*'/*,'tempat.nama_tempat'*/)
            // ->join('tempat','pelayanan.id_tempat','tempat.id')
            ->get();
        return view('pelayanan.index',$data);
    }

    public function create()
    {
        // $data['id_tempat'] = Request()->User()->id_tempat;
        // $data['nama_tempat'] = Tempat::select('nama_tempat')->where('id',$data['id_tempat'])->first();
        return view('pelayanan.create');
    }

    public function store(Request $request)
    {
        // dd(request()->all());
        $pelayanan = new Pelayanan;
        // $pelayanan->id_tempat = Request()->id_tempat;
        $pelayanan->jenis_pelayanan = Request()->jenis_pelayanan;
        $pelayanan->no_pelayanan = Request()->no_pelayanan;
        $pelayanan->save();
        return redirect('admin/pelayanan')->with('success','Data Berhasil Ditambah !!!');

    }

    public function edit(Pelayanan $pelayanan)
    {
        $id = $pelayanan->id;
        $data['pelayanan'] = Pelayanan::select('pelayanan.*'/*,'tempat.nama_tempat','tempat.id as id_tempat'*/)
            // ->join('tempat','pelayanan.id_tempat','tempat.id')
            ->where('pelayanan.id',$id)
            ->first();
        // dd($data['pelayanan']->nama_tempat);
        return view('pelayanan.edit',$data);
    }

    public function update(Pelayanan $pelayanan)
    {
        // $pelayanan->id_tempat = Request()->id_tempat;
        $pelayanan->jenis_pelayanan = Request()->jenis_pelayanan;
        $pelayanan->no_pelayanan = Request()->no_pelayanan;
        $pelayanan->save();
        return redirect('admin/pelayanan')->with('warning','Data Berhasil Diubah !!!');
    }

    public function destroy(Pelayanan $pelayanan)
    {
        $pelayanan->delete();
        return redirect('admin/pelayanan')->with('danger','Data Berhasil Dihapus !!!');
    }
}
