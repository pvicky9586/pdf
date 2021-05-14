<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; //upload in /storage
use Barryvdh\DomPDF\Facade as PDF;  //download

class PdfController extends Controller
{
   

    // public function rules()
    // {
    //     if($this->hasFile('file'))
    //         $rules = array_merge($rules, ['file' => 'mimetypes:image/jpeg,image/png,image/bmp,image/gif']);

    //     if($this->hasFile('file2'))
    //         $rules = array_merge($rules, ['file2' => 'mimetypes:application/pdf|max:2048']);

    //     return $rules;
    // }





	public function upload(){
        $file ='';
        $fileError ='';
        return view('upload',compact('file','fileError'));
    }

    public function guardar(Request $request){
        if($request->hasFile("urlpdf")){            
            $file=$request->file("urlpdf");
            $nombre = "pdf_".time().".".$file->guessExtension();
            $ruta = public_path("PDF/".$nombre);
            $pash = Storage::disk('public')->put('PDF',$request->file('urlpdf')); 
            // echo $pash;
            //echo $ruta;
           
            if($file->guessExtension() == "pdf"){
                //$request->validate([ 'file' => 'max:2000','mimes:pdf,docx,doc' ]);
                $request->validate([ 'file' => 'mimetypes:application/pdf|max:2048']);
               // $file= "es un pdf de tamaño permitido";      
                  //  copy($file, $ruta);
                // return view('mform',compact('file'));
            }
            $fileError ='';
            $file="subido exitosamente";
            return view('mform',compact('file','fileError'));

        }else{
            $file ='';
            $fileError = "Error 'formato 0 tamaño no soportado' ¡verifiq!";
            return view('mform',compact('file','fileError'));
            //return redirect()->route('mform');        
        }






    }




     public function download(){
        $pdf = PDF::loadView('pdf');
        return $pdf->download('ejemplo.pdf');
    }

















}
