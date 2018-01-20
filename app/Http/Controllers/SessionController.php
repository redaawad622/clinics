<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    public function check ()
    {
        $user=DB::table('users')->where('email',request('email'))->first();
        $active=$user->active;
        if($active==1)
        {
            if(!auth()->attempt(request(['email','password']))) {

                return redirect()->back()->withErrors(['error','your email or password not correct!!']);

            }
            else
            {

                return redirect('/');
            }
        }
        else
        {
            return redirect()->back()->withErrors(['error','Please active Your Email and try again!!']);

        }


    }
    public function destroy ()
    {
        auth()->logout();
        return redirect('/');
    }
}
