<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
</head>
	
	<title>Todos</title>

<body>

	<h1 class="text-center my-5">DHARGYAL TODOS PAGE ASSIGNMENT</h1>

	<div class="row justify-content-center">
		<div class="col-md-8">

		<div class="container">
			
			<div class="card card-default">
	
				<div class="card-header">

					<ul class="list-group">
	
					@foreach($todos as $todo)

					<li class="list-group-item">
						{{ $todo ->name}}
					</li>
					@endforeach
	
					</ul>
				</div>

			</div>
		</div>
	</div>
	</div>
</body>

</html>
