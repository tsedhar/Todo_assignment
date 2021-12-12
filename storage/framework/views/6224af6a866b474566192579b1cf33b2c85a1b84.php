<?php $__env->startSection('title'); ?>
	
	Todo list

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<h1 class="text-center my-5">DHARGYAL TODOS PAGE ASSIGNMENT</h1>

	<div class="row justify-content-center">
		<div class="col-md-8">

			
			<div class="card card-default">
	
				<div class="card-header">

					<ul class="list-group">
	
					<?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

					<li class="list-group-item">
						<?php echo e($todo ->name); ?>


						<a href="/todos/<?php echo e($todo->id); ?>" class="btn btn-primary btn-sm float-end">view</a>
					</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
					</ul>
				</div>

			</div>
	</div>
	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/todos-app/resources/views/todos/index.blade.php ENDPATH**/ ?>