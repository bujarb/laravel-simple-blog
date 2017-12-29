@extends('main')

@section('title','|')

@section('content')
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<form action="{{ route('user.update',$user->id)}}">
				<label>Username</label>
				<input type="text" name="name" value="{{$user->name}}" class="form-control">
				<label>Email:</label>
				<input type="text" name="username" value="{{$user->email}}" readonly="" class="form-control">
				<label>Address:</label>
				<input type="text" name="address" value="{{$user->address}}" readonly="" class="form-control">
				<button class="btn btn-block btn-primary btn-lg btn-h1-spacing">Update</button>
			</form>
				<a href="{{route('user.show',$user->id)}}" class="btn btn-danger btn-lg btn-block btn-h1-spacing"> Cancel</a>
		</div>
	</div>
@endsection