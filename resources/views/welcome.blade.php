<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->  

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
<body>



<div class="container" align="text-center">
    <div>
        <label class="display-4 text-center">Download's pdf</label>
    </div>
    <div align="center">
        <img src="{{asset('images/laravel-livewire.jpg')}}" height="200">&nbsp;&nbsp; <img src="{{asset('images/mysql-2.png')}}" height="200">
    </div>
        
    </div><br><br>
    <br><br><br>
    <div align="center" class="display-4">
   
        <a href="{{route('download')}}"  style=" color: red;" title="Descargar">Laravel</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;       
        <a href="{{url('downloadpdf')}}"  style=" color:  #9644a4;" title="Descargar">Livewire</a>
        <div>
             <a href="{{url('pdfBD')}}"  class="text-primary" title="Descargar">Livewire & BD</a>
        </div>&nbsp;&nbsp;&nbsp;            
    </div>
</div>


</body>
</html>
    