<?php

namespace App\Http\Livewire;

use Livewire\Component;

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
        return view('livewire.order-paper-form');
    }
}
