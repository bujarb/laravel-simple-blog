@extends('main')

@section('title','| View Post')

@section('stylesheet')
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
		<h1>Edit Post</h1>
		<hr />
		{!!Form::model($post,['route' => ['posts.update',$post->id],'method'=>'PUT'])!!}
		<div class="col-md-8">

			{{ Form::label('title','Title:') }}
			{{ Form::text('title',null,['class'=>'form-control input-lg']) }}

			{{ Form::label('category','Category:')}}
			{{ Form::select('category_id',$categories,null,['class'=>'form-control'])}}

			{{ Form::label('tags','Select Tag:')}}
			{{ Form::select('tags[]',$tags,null,['class'=>'js-example-basic-multiple form-control','multiple'=>'multiple'])}}

			{{ Form::label('slug','Slug:') }}
			{{ Form::text('slug',null,['class'=>'form-control input-lg']) }}

			{{Form::label('body','Body:',array('class'=>'form-space'))}}
			{{Form::textarea('body',null,['class'=>'form-control'])}}

		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Create At:</dt>
					<dd>{{date('M j , Y h:ia',strtotime($post->created_at))}}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{date('M j , Y h:ia',strtotime($post->updated_at))}}</dd>
				</dl>
				<hr />

				<div class="row">
					<div class="col-sm-6">

						<a href="{{ action('PostController@show', ['id' => $post->id])}}" class="btn btn-danger btn-block">Cancel</a>
					</div>
					<div class="col-sm-6">
					{{ Form::submit('Save Changes',['class'=>'btn btn-success btn-block']) }}
					</div>
				</div>
			</div>
		</div>
		{!!Form::close()!!}
	</div>
@endsection

@section('scripts')
	{!! Html::script('js/select2.min.js') !!}
	{!! Html::script('js/select2.min.js') !!}

	<script type="text/javascript">
		$(".js-example-basic-multiple").select2();

		$(".js-example-basic-multiple").select2().val({!! json_encode($post->tags()->pluck('tag_id')) !!}).trigger('change');
	</script>
@endsection