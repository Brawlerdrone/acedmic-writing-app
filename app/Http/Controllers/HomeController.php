<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class HomeController extends Controller
{
   

    public function index(){

        $services = Service::all();
        
      
        return view('web.index', compact('services'));
    }

    
    // public function getServiceDetails($id){

    // }
        
    public function getPrice($id){

        //

        //fetch the price of the selected service

        $service = Service::find($id);

        $service_price = $service->price;

        
        return response()->json($service_price);
    


    }


    //the order page

    public function order(){

        return view('web.order');
    }
}
