<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\ServiceType;
use App\Models\User;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {
        $stuffs = User::whereNotNull('work_exp')->get();
        $servicetypes = ServiceType::get();
        
        $data = ["stuffs" => $stuffs, 'servicetypes' => $servicetypes];
        return view('index', $data);
    }

    public function show_admin(){
        return view('admin.index');
    }
}
