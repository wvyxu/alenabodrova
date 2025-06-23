<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Specialization;
use App\Models\StuffSpecialization;
use App\Models\ServiceType;
use App\Models\Service;


class StuffController extends Controller
{
    public function stuff()  {
        $stuffs = User::whereNotNull('work_exp')->get();
        $servicetypes = ServiceType::get();
        
        $data = ["stuffs" => $stuffs, 'servicetypes' => $servicetypes];
        return view('stuff', $data);
    }
    public function choosespecialist()  {
        $stuffspec = StuffSpecialization::get();
        $data = ['stuffspec' => $stuffspec];
        return view('createorder.choose-spec', $data);
    }

    public function createbyspecNoparam() {
        $stuffs = User::where('role', '1')->get();
        $stuffspec = StuffSpecialization::get();
        $servs = Service::get();


        // foreach($stuffs as $spec) {
        //     echo $spec->name . ' (';
        //     foreach($stuffspec as $ss) {
        //         if($ss->user_id == $spec->id) {
                    
        //             echo $ss->specialization->name . ' ';
        //         } 
                
        //     }
        //     echo ')<br>';
        // }

        
        // для поиска айди услуги $s->id
        // foreach($stuffspec as $ss) {
        //     foreach($ssel as $s) {
        // // dd($stuffspecsel);
        //         $stuffspecsel = StuffSpecialization::where('specialization_id', $s->specialization_id)->get();
        //         if($s->specialization_id == $ss->specialization_id) {
        //             echo $ss->user->name . ' ' . $ss->user->surname; 
        //         }
        //     }
        // }
        if (!empty($_GET)) {
            if (isset($_GET['subcategory_id']) && !isset($_GET['length_id'])) {
                $ssel= Service::where('subcategory_id', $_GET['subcategory_id'])
                    ->select('specialization_id')
                    ->distinct()
                    ->get();
                $service = Service::where('subcategory_id', $_GET['subcategory_id'])->get();

            } elseif (isset($_GET['subcategory_id']) && isset($_GET['length_id'])) {
                $ssel= Service::where('subcategory_id', $_GET['subcategory_id'])
                    ->where('length_id', $_GET['length_id'])
                    ->select('specialization_id')
                    ->distinct()
                    ->get();

                $service = Service::where('subcategory_id', $_GET['subcategory_id'])
                    ->where('length_id', $_GET['length_id'])
                    ->get();
            }

            $stuff_ids = [];

            foreach ($ssel as $serv) {
                $stuffspecsel = StuffSpecialization::
                where('specialization_id', $serv->specialization_id)
                    ->select('user_id')
                    ->distinct()
                    ->get();
                foreach($stuffspecsel as $spec) {
                    array_push($stuff_ids, $spec->user->id);
                }
            }
            
            $stuff_ids = array_unique($stuff_ids);

            $stuffspec = StuffSpecialization::
            where('specialization_id', $_GET['subcategory_id'])
            ->select('specialization_id', 'user_id')
            ->distinct()
            ->get();
            $services = Service::get();
            $stuffspec = StuffSpecialization::get();
            
            // $stuffspec = StuffSpecialization::get();
            // foreach ($stuff_ids as $v) {
            //     foreach ($stuffs as $s) {
            //         if($s->id == $v) {
            //             echo $s->surname . " " . $s->name . ' (';
            //             foreach ($stuffspec as $ss) {
            //                 if($s->id == $ss->user_id) {
            //                     echo $ss->specialization->name . ' ';
            //                 }
            //             }
            //             echo ')';
            //         }
            //     }
            // }
            
            $data = ['stuff_ids' => $stuff_ids,
                'stuffs' => $stuffs,
                'stuffspec' => $stuffspec,
                'service_id' => $service[0],
            ];
            return view('createorder.choose-spec', $data);            
            
        } else {
            $data = ['stuffs' => $stuffs, 'stuffspec' => $stuffspec];
            return view('createorder.choose-spec', $data);            
        }

    }

    public function createbyspecWithparam(Service $service_id) {
        $subs = Service::where('specialization_id', $stuff_id->id)->get();
        $servicetypes = ServiceType::get();
        
        $data = ['subs'=> $subs, "servicetypes" => $servicetypes];
        return view('createorder.choose-spec', $data);
    }

    public function show_admin(){
        $stuffs = User::where('role', '1')->orWhere('role', '2')->get();
        $data = ["stuffs" => $stuffs];
        return view('admin.admin-stuff', $data);
    }

    public function create(){
        $specializations = Specialization::get();
        $data = ["specializations" => $specializations];
        return view('admin.admin-stuff-create', $data);
    }
}