<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class GeneralController extends Controller
{
    // View Controller
    public function landing_page()
    {
        return view('landingpage');
    }

    public function register_page()
    {
        return view('register');
    }


    // Backend Controller
    public function register_process(Request $request)
    {
        $u = new User();
        try {
            $dt = $u->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'password_confirmation' => 'required|same:password',
            ]);

            $dt['password'] = bcrypt($dt['password']);

            $emailIsExist = $u->where('email', $dt['email'])->count();
            if ($emailIsExist > 0) {
                return redirect('/register')->with('error', 'Email already registered');
            }

            $count = $u->count();
            $user_id = 'SOMNO-' . str_pad($count + 1, 4, '0', STR_PAD_LEFT);

            $dt['user_id'] = $user_id;

            $user = $u->create($dt);

            return redirect()->back()->with('success', 'Register Success');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
