@extends('layout')

@section('title', 'Details for ' . $customer->name)

@section('content')

	<div class="row">
		<div class="col-12">
			<h1>Details for {{ $customer->name }}</h1>
		</div>
	</div>

	<div>
		<div><p><strong>Name : </strong> {{ $customer->name }} </p></div>
		<div><p><strong>Company : </strong> {{ $customer->company->name }} </p></div>
		<div><p><strong>Status : </strong> {{ $customer->active }} </p></div>
	</div>

@endsection