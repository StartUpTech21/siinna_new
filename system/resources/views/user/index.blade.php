@extends('template.base')
@section('content')
<section class="content">
	<div class="container-fluid">
	@if(Request()->User()->level1 == 'admin')
	<a href="{{url('admin/user/create')}}">Tambah</a><br>
	<table border="1">
		<tr>
			<th>no</th>
			<th>Aksi</th>
			<th>Nama Tempat</th>
			<th>Username</th>
			<th>Email</th>
			<th>Level</th>
			<th>No Pelayanan</th>
		</tr>
		@foreach($list_admin as $d)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>
				<a href="{{url('admin/user',$d->id)}}">info</a>
				<a href="{{url('admin/user',$d->id)}}/edit">Edit</a>
				@include('template.utils.delete',['url' => url('admin/user', $d->id)])
			</td>
			<td>{{$d->nama_tempat}}</td>
			<td>{{$d->username}}</td>
			<td>{{$d->email}}</td>
			<td>{{$d->level1}}</td>
			<td>{{$d->no_pelayanan}}</td>
		</tr>
		@endforeach
	</table>
	@endif
	</div>
</section>
@endsection