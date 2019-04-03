<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getSignup() {
        return view('/layouts/user.signup');
    }
    
    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4'
        ]);
        
        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        
        $user->save();
        Auth::login($user);
        return redirect()->route('user.profile');
    }
    
    public function getSignin() {
        return view('/layouts/user.signin');
    }
    
    public function postSignin(Request $request) {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->route('user.profile');
        }
        #return redirect()->back();
        #TODO koodaa tämä ilmoittamaan että käyttäjää ei ole olemassa ja laita ohjautumaan samalle sivulle
        return redirect()->route('product.index');

    }
    
    public function getProfile() {
        return view('/layouts/user.profile');
    }

    public function getLogout() {
        Auth::logout();
        return redirect()->route('product.index');
    }
}
