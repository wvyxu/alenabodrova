<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\StuffSpecialization;
use App\Models\Order;


class OrderController extends Controller
{
    public function show_createorder($service_id, $stuff_id) {
        $service = Service::find($service_id);
        $stuffspec = StuffSpecialization::where('user_id', $stuff_id)
        ->where('specialization_id', $service->specialization_id)
        ->get();

        // if ($service==0) {
        //     $services = Service::where();
            
        // }
        $data = ["service" => $service, 'stuffspec' => $stuffspec[0]];
        return view('createorder\create-order', $data);
    }

    public function createorder(Request $r) {
        $v = $r->validate([
            'order_date' => "required",
            'order_time' => 'required',
        ]);
        $o = new Order();
        $o -> order_date = $r -> order_date;
        $o -> order_time = $r->order_time;
        $o -> service_id = $r -> service_id;
        $o -> stuff_specialization_id = $r -> stuffspec_id;
        $o -> user_id = $r -> user_id;
        
        $o->save();
        return redirect('/profile')->with('success', 'Запись успешно сохранена!');
    }

    
}
