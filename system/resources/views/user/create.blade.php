@extends('template.base')
@section('content')
    <section class="content">
      <div class="container-fluid">
@if(Request()->User()->level1 == 'admin')
		<form action="{{url('admin/user')}}" method="post">
			@csrf
			<input type="hidden" name="status" value="1" required>
			<label>Username</label><input type="text" name="username" required><br>
			<label>Email</label><input type="email" name="email" required><br>
			<label>Password</label><input type="password" name="password" required><br>
			<label>Level</label>
			<select name="level1" required>
				<option value="teller">teller</option>
				<option value="cs">cs</option>
			</select><br>
			<label>No Pelayanan</label><input type="number" name="no_pelayanan" required><br>

			<br>
			<button type="submit">simpan</button>
		</form>
@endif
      </div>
  </section>


@endsection