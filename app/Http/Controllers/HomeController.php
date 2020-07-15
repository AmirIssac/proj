<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index')->with('user' , User::all());
    }



    public function controlPanel(){
        return view('panel');
    }

    public function role(){
            return view('rolepanel')->with('users' , User::all());
    }

    public function makeAdmin(User $user){
    $user->role ='admin';
    $user->update();
        return redirect('/roles');
    }
}
