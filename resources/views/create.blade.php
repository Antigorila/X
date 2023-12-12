@include('layouts.app')

<div class="bg">
    <div class="container">  
        <div class="row">
            <div class="card border-dark">
                <div class="card-body">
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="POST">
                            @csrf
                        <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                        <hr>
                        <div class="row">
                            <textarea name="text" id="text" style="height: 500px"></textarea>
                        </div>
                        <hr>
                        <div class="row">
                            <button type="submit" class="btn btn-dark">Publish</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>