<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller {
    public function login(Request $request) {
        if ($request->input("btnSignIn")) {
            $request->validate(['username' => 'required|max:20', 'password' => 'required|max:20']);
            $input = array("username" => $request->input("username"), "password" => $request->input("password"));
            $user = User::all()->where("username", "=", $input["username"])->first();

            if (isset($user->username)) {
                if ($input["username"] == $user->username && $input["password"] == $user->password) {
                    $_SESSION['session'] = true;
                    $_SESSION['session_user'] = $user;
                    return redirect()->intended();
                }
            } else {
                return view('login')->with("error", true);
            }
        }

        return view('login');
    }

    public function logout() {
        session_unset();
        session_destroy();

        return redirect(route('login', app()->getLocale()));
    }
}
