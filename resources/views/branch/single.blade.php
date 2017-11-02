@extends('admin.master')

@section ('title', "| $branch->name")
@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>{{ $branch->name }}</h1>
		<p>{{ $branch->ptname }}</p>
	</div>
</div>

@endsection