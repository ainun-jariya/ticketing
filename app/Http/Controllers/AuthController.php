<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
   
        if($validator->fails()){
            flash_message($validator->errors()->first(), 'danger');
            return redirect()->back();
        }
   
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        if($request->file('photo')){
            $path = 'images/users';
            $file= $request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path($path), $filename);
            $input['photo'] = $path . '/' . $filename;
        }
        $user = User::create($input);
        $success['token'] =  $user->createToken('ticketing')->plainTextToken;
        $success['name'] =  $user->name;
   
        flash_message('Registration success', 'info');
        return redirect()->to('/login');
    }
   
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('ticketing')->plainTextToken; 
            $success['name'] =  $user->name;
            $request->session()->regenerate();
            return redirect()->intended('/');

        } 
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
    }

    public function logout(Request $request)
    {
    //   $request->user()->currentAccessToken()->delete();
      Auth::logout();
      return redirect()->to('/'); //to check if it's really logged out

    }
}
