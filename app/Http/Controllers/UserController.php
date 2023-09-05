<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\UserRequest;
use App\User;
use Hash;
class UserController extends Controller
{
    public function getList() 
    {
    	$data = User::select('id','username','email','level')->orderBy('id','DESC')->get()->toArray();
    	return view('admin.user.list',compact('data'));
    }
    public function getAdd() 
    {
		return view('admin.user.add');
    }
    public function postAdd(UserRequest $userRequest) 
    {
    	$user = new User();
    	$user->username = $userRequest->txtUser;
    	$user->password = Hash::make($userRequest->txtPass);
    	$user->email = $userRequest->txtEmail;
    	$user->level = $userRequest->rdoLevel;
    	$user->remember_token = $userRequest->_token;
    	$user->save();
    	return redirect()->route('admin.user.getList')->with(['flash_level'=>'success','flash_message'=>'success !! Complete Add User']);
    }
    public function getDelete($id) 
    {
    	$user = User::find($id)->delete();
    	return redirect()->route('admin.user.getList')->with(['flash_level'=>'success','flash_message'=>'success !! Complete Delete User']);
    }
    public function getEdit($id) 
    {
        $user = User::find($id);
		return view('admin.user.edit',compact('user'));
    }
    public function postEdit($id, Request $request) 
    {
        $user = User::find($id);
        if($request->input('txtPass')) {
            $this->validate($request, 
            [
                'txtRePass' => 'required|same:txtPass',
            ],
            [
                'txtRePass.required' => 'Please Enter Re-Password',
                'txtRePass.same' => 'Two Password Don\'t Match'
            ]);
            $pass = $request->input('txtPass');
            $user->password = Hash::make($pass);
        }
        $this->validate($request, 
            [
                'txtEmail' => 'required'
            ],
            [
                'txtEmail.required' => 'Please Enter Email'
            ]);
        $user->email = $request->txtEmail;
        $user->level = $request->rdoLevel;
        $user->remember_token = $request->_token;
        $user->save();
        return redirect()->route('admin.user.getList')->with(['flash_level'=>'success','flash_message'=>'success !! Complete Update User']);
        
    	
    }
}
