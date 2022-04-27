@extends('template.base')
@section('content')
<section class="content">
  <div class="flex">
  	<a href="{{url('admin/pelayanan/create')}}" class="bg-red-100">Tambah</a><br>
	<table>
		<tr>
			<th>NO</th>
			<th>Aksi</th>
			<th>Nama Tempat</th>
			<th>Jenis Pelayanan</th>
			<th>Nomor Pelayanan</th>
		</tr>
		@foreach($list_pelayanan as $d)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>
				<a href="{{url('admin/pelayanan',$d->id)}}/edit">Edit</a>
				@include('template.utils.delete',['url' => url('admin/pelayanan', $d->id)])
			</td>
			<td>{{$d->nama_tempat}}</td>
			<td>{{$d->jenis_pelayanan}}</td>
			<td>{{$d->no_pelayanan}}</td>
		</tr>
		@endforeach
	</table>

  </div>
</section>
@endsection