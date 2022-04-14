<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Hash;
use JetBrains\PhpStorm\ArrayShape;

class AuthController extends Controller
{
    /**
     * @param Request $request
     * @return array
     */
    #[ArrayShape(["user" => "mixed"])]
    public function session(Request $request): array
    {
        $user = $request->session()->get('user');

        return array(
            "user" => $user
        );
    }

    public function index(): Factory|View|Application
    {
        return view('auth.login');
    }


    public function authentication(Request $request): Redirector|Application|RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();
        try {
            Hash::check($request->password, $user->password);
        }catch (\Exception){
            return redirect('/login')->with('message','Authentication Failed');
        }
        $request->session()->put('user', $user);
        return redirect('/')->with('message','Authentication Success');

    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function logout(Request $request): Redirector|RedirectResponse|Application
    {
        $request->session()->forget(['user']);
        $request->session()->flush();
        return redirect('/login');
    }
}
