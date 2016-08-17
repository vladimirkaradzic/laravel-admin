@extends('admin_layouts.admin')

@section('admin-content')

	<div>
		<h1>Galleries</h1>
		<a href="administration/galleries/create" class="button button-right">Create Gallery</a>
	</div>
	
	<ul>
		@foreach ($galleries as $gallery)
			<a href="administration/galleries/edit/{{ $gallery->title }}">
				<li style="padding: 20px;font-size: 20px;border-radius: 10px;">
					{{ ucfirst($gallery->title) }}
				</li>
			</a>
		@endforeach
	</ul>
@stop