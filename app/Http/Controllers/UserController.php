<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;

class UserController extends Controller
{
    public function signup()
    {
        return view('guest.signup');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['required'],
            'address' => ['required', 'min:15'],
            'phone' => ['required', 'min_digits:11', 'numeric']
        ]);

        $user = new User;
        $user->Role = 'user';
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');

        $user->save();
        return redirect()->intended('/signin');
    }

    public function signin()
    {
        return view('guest.signin');
    }

    public function login(Request $request)
    {   
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $user = User::where(['email'=>$request->email])->first();
        if (!Auth::attempt($credentials)) {
            return back()->withErrors('Login details are not valid');
        }
        
        if ($request->remember != null) {
            Cookie::queue('CookieEmail', $request->email, 2628000);
            Cookie::queue('CookiePassword', $request->password, 2628000);
        }
           
        $request->session()->put('users',$user);
        return redirect()->intended('/');
    }

    public function aboutus()
    {
        
        if (Auth::check()) {
            if (Auth::user()->Role == "user") {
                return view('user.about');
            } else {
                return view('admin.about');
            }
        }

        return view('guest.about');
    }

    public function transaction()
    {
        return view('user.transaction');
    }

    public function profile()
    {
        if (!Auth::check()) {
            return redirect('/');
        }
        
        if (Auth::user()->Role == "user") {
            return view('user.profile');
        } else if (Auth::user()->Role == "admin") {
            return view('admin.profile');
        }
    }

    public function updatemenu()
    {
        if (!Auth::check()){
            return redirect('/');
        }

        if (Auth::user()->Role == "user"){
            return view('user.update');
        } else if (Auth::user()->Role == "admin"){
            return view('admin.update');
        }
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['required'],
            'address' => ['required', 'min:15'],
            'phone' => ['required', 'numeric', 'min:11']
        ]);

        DB::table('users')->where('email', 'LIKE', $request->input('email'))->update([
            'name' => $request->input('name'),
            'password' => bcrypt($request->input('password')),
            'address' => $request->input('address'),
            'phone' => $request->input('phone')
        ]);

        return redirect()->intended('/profile');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/');
    }
}
