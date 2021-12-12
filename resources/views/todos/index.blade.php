@extends('layouts.app')

@section('title')
	
	Todo list

@endsection

@section('content')

	<h1 class="text-center my-5">DHARGYAL TODOS PAGE ASSIGNMENT</h1>

	<div class="row justify-content-center">
		<div class="col-md-8">

			
			<div class="card card-default">
	
				<div class="card-header">

					<ul class="list-group">
	
					@foreach($todos as $todo)

					<li class="list-group-item">
						{{ $todo ->name}}

						<a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-end">view</a>
					</li>
					@endforeach
	
					</ul>
				</div>

			</div>
	</div>
	</div>

@endsection
