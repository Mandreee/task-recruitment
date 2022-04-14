<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function access_session(Request $request): array
    {
        $auth = new AuthController();
        return $auth->session($request);
    }

    public function index(Request $request): Factory|View|Application
    {
        $check = $this->access_session($request);
        if ($check['user']->is_admin == 1){
            $data  = User::with('educations', 'job_experiences', 'trainings')->where('is_admin', false)->get();
            return view('data.index', compact('data'));
        }elseif ($check['user'] == null){
            return redirect('/logout')->with('message','You dont have permission to access this page');
        }else{
            $id = $check['user']->id;
            return $this->detail($request, $id);
        }
    }
    public function detail(Request $request, $id){
        $check = $this->access_session($request);
        if ($check['user'] == null){
            return redirect('/logout')->with('message','You dont have permission to access this page');
        }
        $gender = ['male', 'female'];
        $married_status = ['single', 'married'];
        $approval = ['Setuju', 'Tidak Setuju'];
        $data  = User::where('id', $id)
            ->with('educations', 'job_experiences', 'trainings')
            ->get();

        return view('data.detail', compact('data', 'gender', 'married_status', 'approval'));
    }

}
