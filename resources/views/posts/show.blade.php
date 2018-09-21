@extends('layout.app')
@section('content')
<h1>Post Page</h1>
    <div class="row"> 
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                <h3 class="card-title">{{$postData->title}}</h3>
                    <h4>{!! $postData->body !!}</h4>
                    <small>Created at {{$postData->created_at}}</small>
                </div>
            </div>
        </div>
    </div>
    <hr>
<a class="btn btn-primary" href="{{url('/posts')}}">Go Back</a>
<a class="btn btn-secondary" href="{{url('/posts/create')}}">Create Post</a>
@endsection
