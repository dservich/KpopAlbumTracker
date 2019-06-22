@extends('layouts.app')

@section('content')
<h1>Create a New Comeback</h1>
{!! Form::open(['route' => 'admin.artists.store']) !!}
	<div class="w-full my-6">
		{!! Form::label('artist', 'Artist/Group', []) !!}
		{!! Form::select('artist', \App\Artist::pluck('name', 'id'), null, ['placeholder' => 'Select Artist...']) !!}
	</div>
	<div class="w-full my-6">
		{!! Form::label('type', 'Type of Comeback', []) !!}
		{!! Form::text('type') !!}
	</div>
	<div class="w-full my-6">
		{!! Form::label('debut', 'Debut', []) !!}
		{!! Form::checkbox('debut', '', false, []) !!}
	</div>
	<div class="w-full my-6">
		{!! Form::label('announcement-date', 'Announcement date', []) !!}
		{!! Form::date('announcement-date', \Illuminate\Support\Carbon::now(), []) !!}
	</div>
	<div class="w-full my-6">
		{!! Form::label('release-date', 'Release date', []) !!}
		{!! Form::date('release-date', '', []) !!}
	</div>
	{!! Form::submit('Create Comeback', []) !!}
{!! Form::close() !!}
@endsection