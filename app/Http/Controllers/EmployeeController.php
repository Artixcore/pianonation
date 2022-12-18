<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{

    function view(){
        return view('admin.agent.view');
    }

    function add(){
        return view('admin.agent.add');
    }

    function single($name){
        $users = User::where('name', $name)->get();
        return view('admin.agent.single', compact('users'));
    }

    function edit($name){
        $users = User::where('name', $name)->get();
        return view('admin.agent.edit', compact('users'));
    }

    function post(Request $request){

        if($request->file('avatar'))
        {
            $avatar = $request->file('avatar');
            $avatarname = time() . '.' . $request->file('avatar')->extension();
            $avatarPath = public_path() . '/avatar/image/';
            $avatar->move($avatarPath, $avatarname);
        }

        $user = new User();
        $user->avatar = $avatarname;
        $user->shop_id = $request->shop_id;
        $user->name = $request->name;
        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->urole = 'author';
        $user->email = $request->email;
        $user->password =  Hash::make($request->password);

        $user->save();
        return redirect()->back()->with('success', 'Agent Added');
    }

    function update(Request $request,$id){

        $validated = $request->validate([

            'avatar' => 'nullable',
            'shop_id' => 'nullable',
            'name' => 'nullable',
            'f_name' => 'nullable',
            'l_name' => 'nullable',
            'phone' => 'nullable',
            'gender' => 'nullable',

        ]);

        if($request->file('avatar'))
        {
            $avatar = $request->file('avatar');
            $avatarname = time() . '.' . $request->file('avatar')->extension();
            $avatarPath = public_path() . '/avatar/image/';
            $avatar->move($avatarPath, $avatarname);
        }

        $user = User::find($id);
        // $user->avatar = $avatarname;
        $user->shop_id = $request->shop_id;
        $user->name = $request->name;
        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->phone = $request->phone;
        $user->gender = $request->gender;

        $user->save();
        return redirect()->back()->with('success', 'Agent Updated');
    }

    function delete_user($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
