@extends('template.base')
@section('content')
<div class="">
	@if(Request()->User()->level1 == 'admin')
	<a href="{{url('admin/user/create')}}" class="bg-[#0CA49D] text-white px-3 py-1 rounded-md float-right">Tambah</a><br>
	<table class="">
		<tr class="bg-gray-400">
			<th>NO</th>
			<th>Aksi</th>
			<th>Username</th>
			<th>Email</th>
			<th>Level</th>
			<th>No Pelayanan</th>
		</tr>
		@foreach($list_admin as $d)
		<tr class="">
			<td>{{$loop->iteration}}</td>
			<td class="py-2">
				<form action="{{url('admin/user', $d->id)}}" method="post" class="form-inline flex" onsubmit="return confirm('Apakah anda yakin akan menghapus data ini ??')">
					@csrf
					@method("delete")				
					<a href="{{url('admin/user',$d->id)}}" class="bg-gray-800 text-white px-3 py-1 rounded-md mx-1">info</a>
					<a href="{{url('admin/user',$d->id)}}/edit" class="bg-yellow-400 text-white px-3 py-1 rounded-md mx-1">Edit</a>
					<button class="bg-red-700 text-white px-3 py-1 rounded-md mx-1"> Delete</button>
				</form>
			</td>
			<td>{{$d->username}}</td>
			<td>{{$d->email}}</td>
			<td>{{$d->level1}}</td>
			<td>{{$d->no_pelayanan}}</td>
		</tr>
		@endforeach
	</table>
	@endif
</div>
@endsection