@extends('layouts.main')

@section('content')
	@foreach($errors->all() as $error)
	
		<p class="error">{{ $error  }}</p>
	@endforeach
<div class="form-group">
{{ Form::open() }}
<input type="text" name="username" placeholder="Username"/>
<input type="password" name="password" placeholder="Password"/> 
<button type="submit" class="btn btn-default">Submit</button>
{{ Form::close() }}
</div>
@stop