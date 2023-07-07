<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $search=$request->search;
        $users=User::where('name','like',"%". $search. "%")->orWhere('email','like',"%". $search. "%")->paginate(5);
        return view ('admin.users.index',compact('users'));
    }


    public function edit(User $user)
    {
        //

        $roles = Role::all();
        return view('admin.users.edit',compact('user','roles'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.edit',$user)->with('info','Se asigno los roles correctamente');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
