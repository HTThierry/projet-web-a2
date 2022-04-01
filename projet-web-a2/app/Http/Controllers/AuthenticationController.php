<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

use App\Models\users;
use App\Models\permissions;
use Psy\Exception\BreakException;

class AuthenticationController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function view()
    {
        return view('sign-in');
    }


    public function authenticate($login, $password)
    {

        //dd($login, $password);

        //$userPassword = (DB::table('users')->where('login', '=', $login)->get('password'));
        //dd($userPassword);
        if (DB::table('users')->where('login', '=', $login)->exists())
        {
            //dd('le login existe');
            //dd($password, DB::table('users')->where('login', '=', $login)->get('password'));
            if (DB::table('users')->where('login', '=', $login)->where('password', '=', $password)->exists())
            {
                //dd('le password est le bon');
                $idUser = DB::table('users')->where('login', '=', $login)->get('id_user');
                //dd($idUser);
                session()->put('loggedUserId', $idUser);
                //dd(session()->get('loggedUserId'));


                return redirect('/');
            }
            else
            {
                dd("Incorrect password");
            }
        }
        else
        {
            dd("This username does not exist");
        }
    }

    public function store(Request $request)
    {

        $request->validate([
            'login' => ['bail', 'required'],
            'password' => ['required']
        ]);


        $login = $request->get('login');
        $password =  $request->get('password');
        AuthenticationController::authenticate($login, $password);


        //session()->flash('login', $login);
        //session()->flash('password', $password);

        //session()->flash('user', $user);

        return redirect('/');
    }
}
