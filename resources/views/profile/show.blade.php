@extends('main')

@section('title','| User')

@section('content')
	<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>{{$user->name}}</h4>
                        <small><cite title="San Francisco, USA">{{$user->address}} <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>{{$user->email}}
                            <br />
                            <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>June 02, 1988
                            <br />
                        <!-- Split button -->
                        <a href="{{route('user.edit',$user->id)}}" class="btn btn-primary">Update</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection