@extends('layout')

@section('title', 'Customers List')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-12">
			<h1>Customers List</h1>
			<p><a href="customers/create">Add New Customers</a></p>
		</div>
	</div>

	@foreach ($customers as $customer)
		<div class="row">
			<div class="col-2">{{ $customer->id }}</div>
			<div class="col-4">
				<a href="/customers/{{ $customer->id }}">{{ $customer->name }}</a>
			</div>
			<div class="col-4">{{ $customer->company->name }}</div>
			<div class="col-2">{{ $customer->active }}</div>
		</div>
	@endforeach
</div>

@endsection