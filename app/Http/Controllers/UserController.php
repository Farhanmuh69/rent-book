<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::where('role_id', 2)->where('status', 'active')->get();
        return view('User', ['users' => $users]);
    } 

    public function registereduser()
    {
        $registeredUsers = User::where('status', 'inactive')->where('role_id', 2)->get();
        return view('registered-user', ['registeredUsers'=>$registeredUsers]);
    } 

    public function show($slug)
    {
        $user = user::where('slug', $slug)->first();
        return view('user-detail', ['user' => $user]);
    } 

    public function approve($slug)
    {
        $user = user::where('slug', $slug)->first();
        $user->status = 'active';
        $user->save();
        return redirect('user-detail/'.$slug)->with('status','User approve Succesfuly');
    } 

    public function delete($slug)
    {
        $user = user::where('slug', $slug)->first();
        return view('user-delete', ['user'=>$user]);
    } 

    public function destroy($slug)
    {
        $user = user::where('slug', $slug)->first();
        $user->delete();
        return redirect('users')->with('status','User banned Succesfuly');
    } 

    public function bannedUser()
    {
        $bannedUser = User::onlyTrashed()->get();
        return view('user-banned', ['bannedUsers'=>$bannedUser]);
    } 

    public function restore($slug)
    {
        $user = User::withTrashed()->where('slug', $slug)->first();
        $user->restore();
        return redirect('users')->with('status','User restore Succesfuly');
    } 
}
