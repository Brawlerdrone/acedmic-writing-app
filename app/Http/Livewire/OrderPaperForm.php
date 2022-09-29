<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class OrderPaperForm extends Component
{
    public $steps = 2;
    public $currentStep = 1;

    public function mount(){
        $this->currentStep = 1;
    }
    public function moveTonextStep(){

        $this->currentStep++;

        if($this->currentStep  > $this->steps){
            $this->currentStep  = $this->steps;
        }
    }
    public function moveToPreviousStep(){
        $this->currentStep--;
        if($this->currentStep  <= 1){
            $this->currentStep  = 1;
        }
    }

    public function render()
    {
        $services = Service::all();
        return view('livewire.order-paper-form')->with([

            "services" => $services,
        ]);
    }
    public function getServicePrice($id){
        $p = DB::table('services')->where('id',$id)->first();
        //dd($p);

        return response()->json($p);
    }
    public function getPaperUnderService($id){
        
    }

}
