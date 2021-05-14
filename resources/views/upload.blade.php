@extends('layout')
@section('content')   
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h3  class="text-center display-4 text-primary">Upload Pdf</h3>
            <form action="/upload" method="post" enctype="multipart/form-data" >
                @csrf
                <input type="file" name="urlpdf" >
                @error('file')
                    <div class="alert-danger">Tamaño de archivo no soportado</div>
                @enderror
        <br><br>
                      <!--   <label>Inagenes</label>
                        <input type="file" name="file"><br>
                        <label>Pdf</label>
                        <input type="file" name="file2"> -->



                <input type="submit" value="subir">
            </form>

         
               <div class="text-center ">
                    <label class="text-success display-4">{{$file}}</label>      
                    <label class="text-danger display-5">{{$fileError}}</label>
               </div>
     
        </div>
    </div>
</div>

@endsection 



