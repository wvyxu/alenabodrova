<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\ServiceType;
use App\Models\Subcategory;
use App\Models\Specialization;
use App\Models\StuffSpecialization;
use App\Models\User;

class ServiceController extends Controller
{
    public function createbyserviceNoparam() {
        $servicetypes = ServiceType::get();
        if (isset($_GET['stuff_id'])) {
            $stuffspec = StuffSpecialization::where('user_id', $_GET['stuff_id'])
            ->select('specialization_id', 'user_id')
            ->distinct()
            ->get();
            $services = Service::get();
            $data = ["servicetypes" => $servicetypes, 'stuffspec' => $stuffspec];
        }
        else {
            // foreach($servicetypes as $st){
            //     foreach($st->subcategories as $s){
            //         foreach ($s->servs() as $p) {
            //             echo $p->subcategory->name;
            //             if (isset($p->length)) {
            //                 echo  ' ' . $p->length->name;
            //             }
            //             echo '<br>';
                        
            //         }
            //     }
            // }
            $data = ["servicetypes" => $servicetypes];
        }
        return view('createorder.choose-serv', $data);
    }

    public function createbyserviceWithparam(Specialization $stuff_id) {
        $subs = Service::where('specialization_id', $stuff_id->id)->get();
        $servicetypes = ServiceType::get();
        
        $data = ['subs'=> $subs, "servicetypes" => $servicetypes];
        return view('createorder.choose-serv', $data);
    }

    public function show_services() {
        $servicetypes = ServiceType::get();
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
        $data = ['servicetypes' => $servicetypes];
        return view('services', $data);
    }

    public function show_admin(){
        $servicetypes = ServiceType::get();
        $data = ["servicetypes" => $servicetypes];
        return view('admin.admin-services', $data);
    }
}


