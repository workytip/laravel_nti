<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthTaskController extends Controller
{
    //
    public function signup()
    {
        return view('signup');
    }


    public function Dosignup(Request $request)
    {
        $data = $this->validate($request, [
            'name'     => 'required|min:3|max:15',
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ]);

        $data['password']  = bcrypt($data['password']);

        // DB Query Builder . . .
        $op =   DB::table('users')->insert($data);

        if ($op) {
            $message = "User Created Successfully";
            session()->flash('Message-success', $message);
        } else {
            $message = "User Not Created";
            session()->flash('Message-error', $message);
        }

        return redirect(url('login'));
    }

    ############
    public function login()
    {
        return view('login');
    }


    public function Dologin(Request $request)
    {
        $data = $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (auth()->attempt($data)) {

            return redirect(url('index'));
        } else {

            session()->flash('Message-error', "Invalid Credentials");

            return back();
        }
    }
    public function logout()
    {

        auth()->logout();

        return redirect(url('login'));
    }
}
