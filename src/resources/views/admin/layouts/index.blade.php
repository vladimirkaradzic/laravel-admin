@extends('admin_layouts.admin')

@section('admin-content')

	<h1>Layouts</h1>

	<div>
		<a href="administration/layouts/create">Create layout</a>
	</div>
	
	<div>
		@foreach ($templates as $key => $template)
			<a href="administration/layouts/edit/{{ $key }}">
				<img src="/images/{{ $template }}">
			</a>
		@endforeach
	</div>
@stop