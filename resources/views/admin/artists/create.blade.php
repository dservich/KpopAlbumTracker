@extends('layouts.app')

@section('content')
<h1>Add a New Artist</h1>
{!! Form::open(['route' => 'admin.artists.store', 'files' => true]) !!}
	<div class="w-full my-6">
		{!! Form::label('name', 'Artist/Group Name', []) !!}
		{!! Form::text('name') !!}
	</div>
	<div class="w-full my-6">
		{!! Form::label('type', 'Artist Type', []) !!}
		{!! Form::select('type', ['Soloist', 'Group'], null, ['placeholder' => 'Please select a type...']) !!}
	</div>
	<div class="w-full my-6">
		{!! Form::label('profile_image', 'Profile Image', []) !!}
		{!! Form::file('profile_image') !!}
	</div>
	<div class="w-full my-6">
		{!! Form::label('record_label', 'Record label', []) !!}
		{!! Form::select('record_label', \App\RecordLabel::orderBy('name')->pluck('name', 'id'), null, ['placeholder' => 'Select a label...']) !!}
	</div>
	
	{!! Form::submit('Add Artist', []) !!}
{!! Form::close() !!}
@endsection