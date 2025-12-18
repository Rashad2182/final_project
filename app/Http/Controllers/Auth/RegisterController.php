<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Front\HomeController;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function register(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',  // ✅ совпадает с формой
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $role_id = User::count() === 0 ? 1 : 2;

        $user = User::create([
            'role_id' => $role_id,  // ✅ ID вместо строки
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        auth()->login($user);  // ✅ Auth импортирован, $user определён

        return redirect('/');
    }

}
