<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class PageController extends Controller
{
    public function index(){
        return view('index');
    } 
    public function about()
    {
        return view('about.index');
    }
    public function profil()
    {
        return view('profil.index');
    }
    public function home()
    {
        return view('home');
    }
// function login

    public function login()
    {
        return view('login.index');
    }

        public function loginProses(Request $req)
    {
        if(!\Auth::attempt(['email' => $req->email, 'password' => $req->password])){
        return redirect()->back();
        }
        return redirect()->route('profil');
    }
    //  function logout
    public function logout()
    {
        \Auth::logout();
        return redirect()->route('login');
    }
    // function register 
    
    public function register()
    {
        return view('register.index');
    }
    public function registerProses(Request $req)
    {
        $this->validate($req, [
            'name'=>'required|min:4',
            'email'=>'required|unique:users|email',
            'password'=>'required|min:6|confirmed'

        ]);
       
        $User=new User;
        $User->name=$req->get('name');
        $User->email=$req->get('email');
        $User->password=bcrypt($req->get('password'));
        $User->save();
        return redirect()->to("/login");
    }


}
