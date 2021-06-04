<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Barryvdh\DomPDF\Facade as PDF;  //download

class ComponentPdf extends Component
{
    public function render()
    {
        return view('livewire.component-pdf');
    }


    public function downloadpdf(){
        $pdf = PDF::loadView('pdf-livewire');
        return $pdf->download('livewire.pdf');
    }
}
