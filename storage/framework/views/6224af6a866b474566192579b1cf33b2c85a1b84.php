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

	<h1 class="text-center my-5">DHARGYAL TODOS PAGE</h1>

	<div class="row justify-content-center">
		<div class="col-md-8">

		<div class="container">
			
			<div class="card card-default">
	
				<div class="card-header">

					<ul class="list-group">
	
					<?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

					<li class="list-group-item">
						<?php echo e($todo ->name); ?>

					</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
					</ul>
				</div>

			</div>
		</div>
	</div>
	</div>
</body>

</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/todos-app/resources/views/todos/index.blade.php ENDPATH**/ ?>