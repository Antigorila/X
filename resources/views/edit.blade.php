@include('layouts.app')


<div class="bg">
    <div class="row mt-4">
      <div class="col-12">
        <div class="card p-4">
          <div class="card-body">
            <h4 class="card-title">Review:</h4>
            <h4>{{ $post->title }}</h4>
            <form action="{{ route('posts.update' , $post) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-control mb-3 col-md-6 overflow-auto text-truncate" style="height: 200px;">
                    <textarea name="text" id="text" style="height: 200px;" class="fullSize">{{ $post->text }}</textarea>
                </div> 
                <button class="btn btn-dark">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
  
  