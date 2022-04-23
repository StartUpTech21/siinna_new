<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $id_tempat = Request()->User()->id_tempat;
        $data['list_superadmin'] = User::select('user.*')
            ->get();
        $data['list_admin'] = User::select('user.*')
            ->whereIn('level1',['admin','teller','cs'])
            ->get();
        return view('user.index',$data);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->username = Request()->username;
        $user->email = Request()->email;
        $user->password = bcrypt(request('password'));
        $user->level1 = Request()->level1;
        $user->status = Request()->status;
        $user->save();
        
        return redirect('admin/user')->with('success','Data Berhasil Ditambah !!!');
    }

    public function show(User $user)
    {
        $data['user'] = $user;
        // dd($data['user']);
        return view('user.info',$data);
    }

    public function edit(User $user)
    {
        $data['data'] = $user;
        return view('user.edit',$data);
    }

    public function update(User $user)
    {
        $user->username = Request()->username;
        $user->email = Request()->email;
        if(request('password')) $user->password = bcrypt(request('password'));
        $user->level1 = Request()->level1;
        $user->status = Request()->status;
        $user->save();

        return redirect('admin/user')->with('success','Data Berhasil Ditambah !!!');
    }

    function destroy(User $user){
        $user->delete();
        
        return redirect('admin/user')->with('success','Data Berhasil Dihapus !!!');
    }
}
