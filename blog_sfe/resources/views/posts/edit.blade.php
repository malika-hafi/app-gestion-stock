
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PATCH']) }}
      @include('posts.form')
      {{ Form::close() }}
    </div>
  </div>
@endsection
