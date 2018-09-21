@extends('layout.app');
@section('content') 
    <h1>Post Page</h1>
    @if(count($postsData) > 0)
        <div class="row">
            @foreach($postsData as $postData) 
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                        <a href="{{url('posts/'.$postData->id)}}"><h3 class="card-title">{{$postData->title}}</h3></a>
                            <small>Created at {{$postData->created_at}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{$postsData->links()}}
    @else 
    <p>No Post is found</p>
    @endif

@endsection