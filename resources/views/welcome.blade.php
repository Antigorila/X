@include('layouts.app')
<!--
<video id="background-video" playsinline autoplay muted poster="#">
    <source src="{{ asset('storage/videos/video.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
</video>
-->
<div class="bg">
<div class="container">
    @if (Auth::check())
    <div class="row">
        <a type="button" href="{{ route('posts.create') }}" class="btn btn-dark">Add post</a>
    </div>    
    @endif
    <div class="row">
        <div class="row">
            <br>
        </div>
        @foreach (App\Models\Post::all() as $post)
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $post->user->name }}</h4>
                <h4 class="card-title">{{ $post->title }}</h4>
                <p class="card-text">{{ $post->text }}</p>
                <hr>
                <div class="row">
                    <p><i>{{ $post->created_at }}</i></p>
                    @if (Auth::check())
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-dark">Comment</a>
                        <h1></h1>
                        @if (Auth::user()->id == $post->user_id)
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-dark">Edit</a>
                        @endif
                    @endif
                    
                </div>
            </div>
        </div>
        <div class="row">
            <br>
        </div>
        @endforeach
    </div>
</div>
</div>