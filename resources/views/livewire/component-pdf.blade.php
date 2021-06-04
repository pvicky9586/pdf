<!DOCTYPE html>
<html>
<head>
	<title>PDF</title>

        <!-- Styles -->  

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1 align="center">PDF-BD</h1><br><br><br>

<img src="images/livewire.png">
<img src="images/mysql.png">
<table class="table table-borde table-sm">
	    <thead class="thead-dark">
		<tr>
			<th>Nomre</th>
			<th>Email</th>
		</tr>
	</thead>
	
	<tbody>
		@foreach($peopls as $peop)
		<tr>
			<td>{{$peop->name}}</td>
			<td>{{$peop->email}}</td>
		</tr>
		@endforeach
	</tbody>

</table>

<p>
	
	<a href="https://github.com/barryvdh/laravel-dompdf"> click aqui</a>
</p>
</body>
</html>