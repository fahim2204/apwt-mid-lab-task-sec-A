<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;
use App\Http\Controllers\Countable;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        // echo "From Login controller";
        return view('login');
    }

    function verify(Request $request)
    {
        $request->validate([
            'uname' => 'required|email|max:50',
            'password' => 'required|min:8|max:20|alpha_dash',
        ]);



        //return $request->input();



        $result = DB::table('users')
            ->where('email', $request->uname)
            ->where('password', $request->password)
            ->first();

        if($result==null){
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }else{
          return redirect('/home');
        }


    }
}
