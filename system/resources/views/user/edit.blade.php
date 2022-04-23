@extends('template.base')
@section('content')
<section class="content">
  <div class="container-fluid">
@if(Request()->User()->level1 == 'admin')
		<form action="{{url('admin/user',$data->id)}}" method="post">
			@csrf
			@method("PUT")
			<input type="hidden" name="status" value="1" required>
			<label>Username</label><input type="text" name="username" value="{{$data->username}}" required><br>
			<label>Email</label><input type="email" name="email" value="{{$data->email}}" required><br>
			<label>Password</label><input type="password" name="password"><br>
			<label>Level</label>
			<select name="level1" required>
				<option value="admin" @if($data->level1=='admin') selected @endif>admin</option>
				<option value="teller" @if($data->level1=='teller') selected @endif>teller</option>
				<option value="cs" @if($data->level1=='cs') selected @endif>cs</option>
			</select>
			<br>
			<button type="submit">simpan</button>
		</form>
@endif
  </div>
</section>
@endsection