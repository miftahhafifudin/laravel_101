@extends('layout.app')

@section('content')
    <div class="container-fluid">
    <h1>POST</h1>
    </div>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card card-body bg-light">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width: 50%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">
                            {{$post->title}}</a>
                        </h3>
                        <small>written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Post Found</p>
    @endif
@endsection