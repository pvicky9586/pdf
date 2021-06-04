<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; //upload in /storage
use Barryvdh\DomPDF\Facade as PDF;  //download

class PdfController extends Controller
{
   




     public function download(){
        $pdf = PDF::loadView('pdf-laravel');
        return $pdf->download('ejemplo.pdf');
    }






}
