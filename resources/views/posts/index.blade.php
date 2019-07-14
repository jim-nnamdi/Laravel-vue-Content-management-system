@extends('layouts.master')

@section('content')
<div class="container">
  <div class="row align-items-center">
    <div class="col-md-8 mx-auto">
      <h1 class="my-4 text-center">Welcome to the Blog </h1>

      @foreach ($posts as $post)
      <div class="card mb-4">
        <img class="card-img-top" src=" {!! !empty($post->image) ? '/uploads/posts/' . $post->image :  'http://placehold.it/750x300' !!} " alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title text-center">{{ $post->title }}</h2>
          <p class="card-text"> {{ str_limit($post->body, $limit = 280, $end = '...') }} </p>
          <a href="/posts/{{ $post->id }}" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
          <a href="#">Posted {{ $post->created_at->diffForHumans() }} </a>
        </div>
      </div>
      @endforeach
      {{ $posts->links() }}

    </div>
  </div>
</div>
@endsection