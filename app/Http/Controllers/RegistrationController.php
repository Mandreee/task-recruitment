<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    public function index(): Factory|View|Application
    {
        $gender = ['male', 'female'];
        $married_status = ['single', 'married'];
        $approval = ['Setuju', 'Tidak Setuju'];

        return view('auth.registration', compact('gender', 'married_status', 'approval'));
    }

    public function registration(Request $request): Factory|View|Application
    {
        User::create($request->all());

        return view('auth.login');
    }

}
