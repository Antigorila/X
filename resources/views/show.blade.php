@include('layouts.app')

<div class="bg">
<div class="container">  
    <div class="row">
        <div class="card border-dark">
            <div class="card-body">
                <div class="card-body">
                    <h4 class="card-title">{{ $post->user->name }}</h4>
                    <h4 class="card-title">{{ $post->title }}</h4>
                    <p class="card-text">{{ $post->text }}</p>
                    <hr>
                    <div class="row">
                        <p><i>{{ $post->created_at }}</i></p>
                    </div>
                    <hr>
                    <form action="{{ route('comments.store', $post->id) }}" method="POST">
                        @csrf
                    <div class="row card-body">
                        <textarea placeholder="Comment" name="comment" id="comment" class="fullSize" style="height: 100px"></textarea>
                        <h1></h1>
                        <button class="btn btn-dark">Submit</button>
                    </div>
                    </form>
                </div>
                @foreach ($post->comments as $comment)   
                    <div class="card border-dark">
                        <div class="card-body">
                            <h4 class="card-title">{{ $comment->user->name }}</h4>
                            <p class="card-text">{{ $comment->comment }}</p>
                        </div>
                        <div class="ml-3">
                            <hr>
                            <div class="row">
                                <p><i>{{ $post->created_at }}</i></p>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach
            </div>
        </div>
        <div class="row">
            <br>
        </div>
    </div>
</div>
</div>