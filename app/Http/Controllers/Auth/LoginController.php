<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function redirectTo()
    {
        $userRoleId = $this->guard()->user()->user_classification_id;
        if ($userRoleId == config('const.USER_CLASSIFICATIONS.SELLER') || $userRoleId == config('const.USER_CLASSIFICATIONS.ADMIN')) {
            // 編集可能ユーザー;
            return '/seller/items';
        } else {
            // 一般購入ユーザー;
            return '/home';
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // ログインのバリデーションをオーバーライド
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|email',
            'password' => 'required|string|alpha_num_check',
        ]);
    }
}
