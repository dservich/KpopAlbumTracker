@extends('layouts.app')

@section('content')
<h1>Add a New Record Label</h1>
{!! Form::open(['route' => 'admin.recordlabels.store', 'files' => true]) !!}
	<div class="w-full my-6">
		{!! Form::label('name', 'Record Label Name', []) !!}
		{!! Form::text('name') !!}
	</div>
	<div class="w-full my-6">
		{!! Form::label('color', 'Representative Color', []) !!}
		{!! Form::select('color', ['Red', 'Blue', 'Yellow', 'Black', 'Indigo'], null, ['placeholder' => 'Please select a color...']) !!}
	</div>

	{!! Form::submit('Add Record Label', []) !!}
{!! Form::close() !!}
@endsection