@extends('main')

@section('title',"| $post->title")

@section('stylesheet')
	<style type="text/css">
		.abc{
			margin-top:50px;
		}

		.button-margin{
			margin-top: 5px;
		}

	</style>
@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>{{ $post->title }}</h1>
			<p>{!! $post->body !!}</p>
			<hr>
			<p>Posted in: {{$post->category->name}}</p>
		</div>
	</div>

	<div class="row">
		<div id="comment-form" class="col-md-8 col-md-offset-2 abc">
			{{ Form::open() }}
				<div class="row">
					<div class="col-md-6">
						{{ Form::label('name','Name:') }}
						{{ Form::text('name',null,['class'=>'form-control']) }}
					</div>
					<div class="col-md-6">
						{{ Form::label('email','Email:') }}
						{{ Form::text('email',null,['class'=>'form-control']) }}
					</div>
					<div class="col-md-12">
						{{ Form::label('comment','Comment:') }}
						{{ Form::textarea('comment',null,['class'=>'form-control','rows'=>'5']) }}

						{{ Form::submit('Add Comment',['class'=>'btn btn-success btn-block button-margin']) }}
					</div>
				</div>
			{{ Form::close() }}
		</div>
	</div>

@endsection