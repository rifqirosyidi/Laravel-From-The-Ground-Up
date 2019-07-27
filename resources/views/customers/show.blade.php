@extends('layout')

@section('title', 'Details for ' . $customer->name)

@section('content')

<div class="container">
	<div class="row">
		<div class="col-12">
			<h1>Details for {{ $customer->name }}</h1>
			<p><a href="/customers/{{ $customer->id }}/edit">Edit</a></p>

			<form action="/customers/{{ $customer->id }}" method="POST">
				@method('DELETE')
				@csrf

				<button class="btn btn-danger" type="submit">Delete</button>
			</form>
		</div>
	</div>

	<div>
		<div><p><strong>Name : </strong> {{ $customer->name }} </p></div>
		<div><p><strong>Company : </strong> {{ $customer->company->name }} </p></div>
		<div><p><strong>Status : </strong> {{ $customer->active }} </p></div>
	</div>
</div>

@endsection