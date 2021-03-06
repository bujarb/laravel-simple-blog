@extends('main')

@section('title',' | Create New Post')
@section('stylesheet')
	{!! Html::style('css/parsley.css') !!}
	{!! Html::style('css/select2.min.css') !!}
	<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>

  	<script>
  		tinymce.init({
  			selector:'textarea',
  			plugins: "link",
  			menubar:false
  		});
  	</script>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr />
			{!! Form::open(array('route'=>'posts.store','files'=>true)) !!}
			    {{ Form::label('title','Title:') }}
			    {{ Form::text('title',null,array('class'=>'form-control'))}}

			    {{ Form::label('slug','Post Slug:') }}
			    {{ Form::text('slug',null,array('class'=>'form-control'))}}

			    {{ Form::label('category','Select Category:')}}
			    <select class="form-control" name="category">
			    	@foreach($categories as $category)
			    		<option value="{{$category->id}}">{{$category->name}}</option>
			    	@endforeach
			    </select>

				{{ Form::label('tags','Select Tag:')}}
			    <select class="form-control js-example-basic-multiple" name="tags[]" multiple="multiple">
			    	@foreach($tags as $tag)
			    		<option value='{{$tag->id}}'>{{$tag->name}}</option>
			    	@endforeach
			    </select>

					{{ Form::label('img','Upload featured image:') }}
					{{ Form::file('img'); }}

			    {{ Form::label('body','Post Body:') }}
			    {{ Form::textarea('body',null,array('class'=>'form-control'))}}

			    {{ Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
			{!! Form::close() !!}
		</div>
	</div>
@endsection

@section('scripts')
	{!! Html::script('js/parsley.min.js') !!}
	{!! Html::script('js/select2.min.js') !!}

	<script type="text/javascript">
		$(".js-example-basic-multiple").select2();
	</script>
@endsection
