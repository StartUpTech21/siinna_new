@extends('template.base')
@section('content')
<section class="content">
  <div class="container-fluid">

  <form action="{{url('admin/pelayanan',$pelayanan->id)}}" method="post">
    @csrf
    @method("PUT")
    <label>Pilih tempat</label>
    <input type="hidden" name="id_tempat" value="{{$pelayanan->id_tempat}}" readonly><br>
    <input type="text" value="{{$pelayanan->nama_tempat}}" readonly><br>
    <label>Jenis pelayanan</label>
    <select name="jenis_pelayanan" required>
      <option value="">--PILIH PELAYANAN--</option>
      <option value="teller" @if($pelayanan->jenis_pelayanan=='teller') selected @endif>Teller</option>
      <option value="cs" @if($pelayanan->jenis_pelayanan=='cs') selected @endif>CS</option>
    </select><br>
    <label>Nomor pelayanan</label>
    <input type="number" name="no_pelayanan" value="{{$pelayanan->no_pelayanan}}" required>
    <br>
    <button type="submit">simpan</button>
  </form>

  </div>
</section>
@endsection