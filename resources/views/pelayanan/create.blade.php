@extends('template.base')
@section('content')
<section class="content">
  <div class="container-fluid">

	<form action="{{url('admin/pelayanan')}}" method="post">
		@csrf
		<label>Jenis pelayanan</label>
		<select name="jenis_pelayanan" required>
			<option value="">--PILIH PELAYANAN--</option>
			<option value="teller">Teller</option>
			<option value="cs">CS</option>
		</select><br>
		<label>Nomor pelayanan</label>
		<input type="number" name="no_pelayanan" required>
		<br>
		<button type="submit">simpan</button>
	</form>

  </div>
</section>
@endsection