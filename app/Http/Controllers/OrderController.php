<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\StuffSpecialization;
use App\Models\Specialization;
use App\Models\Order;
use App\Models\Length;
use App\Models\User;
use App\Models\ServiceType;

use Illuminate\Support\Facades\Auth;

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

    public function menu() {
        if(Auth::user()) {
            return view('createorder.menu');
        } else {
            return redirect("reg")->with('error', 'Для записи необходима регистрация');
        }
    }

    public function show_admin(){
        return view('admin.index');
    }

    public function show_admin_orders() {
        $servicetypes = ServiceType::get();
        $orders = Order::get();
        $specializations = Specialization::get();

        /*
        foreach($servicetypes as $st){
            foreach($st->subcategories as $s){
                foreach ($s->specs() as $p) {
                    echo $p->specialization->name;
                    foreach($s->catserv($p->specialization_id) as $cs) {
                        if (isset($cs->length)) {
                            echo  ' ' . $cs->length->name;
                        }
                        echo ' ' . $cs->price;
                    }
                    echo '<br>';
                    
                }
            }
        }
        */

        $data = ['servicetypes' => $servicetypes, 
                    'orders' => $orders,
                    'specializations' => $specializations,];
        return view('admin.admin-orders', $data);
    }


    public function create(){
        $users = User::where('role', 0)->get();
        $stuffs = User::where('role', 1)->orWhere('role', 2)->get();
        $services = Service::get();
        $lengths = Length::get();
        $specializations = Specialization::get();
        $data = ["users" => $users,
                    'stuffs' => $stuffs,
                    'lengths' => $lengths,
                    'services' => $services,];
        return view('admin.admin-orders-create', $data);
    }

}
