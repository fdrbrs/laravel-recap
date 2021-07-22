@extends('layouts.app')

@section('content')
<h1>Posts</h1>

<div class="container">
    <div class="row">
        @foreach
            <div class="col-md-4">
                <div class="card">
                    <a href="{{route(posts.show'}, $posts->id}}"><img class="card-img-top" src="{{$post->image}}" alt="{{$post->title}}"></a>
                    <div class="card-body">
                        <h4 class="card-title">{{$post->title}}</h4>
                        <p class="card-text">{{$post->body}}</p>
                    </div>
                </div>
            </div>
        @endforeach
            
        </div>
        
    </div>
</div>
@endsection