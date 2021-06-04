<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Barryvdh\DomPDF\Facade as PDF;  //download
use App\Models\People;

class ComponentPdf extends Component
{
    public function render()
    {
        return view('livewire.component-pdf');
    }


    public function downloadpdf(){
        $pdf = PDF::loadView('pdf-livewire');
        return $pdf->download('Download-livewirepdf');
    }

    public function pdfbd(){
    	$peopls = People::all();
    	$pdf = PDF::loadView('livewire.component-pdf',compact('peopls'));
        return $pdf->download('Download-pdf-BD');

    }
}
