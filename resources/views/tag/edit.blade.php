@extends('main')

@section('title','| Edit Tag')

@section('content')

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1>Edit the <strong>{{$tag->name}}</strong> Tag</h1>
			{{ Form::model($tag,['route'=>['tags.update',$tag->id],'method'=>'PUT']) }}
				{{ Form::label('name','Name:') }}
				{{ Form::text('name',null,['class'=>'form-control']) }}
				{{ Form::submit('Save Changes',['class'=>'btn btn-success btn-block','style'=>'margin-top:10px']) }}
			{{ Form::close() }}
		</div>
	</div>

@endsection