@extends('layouts.master')

@section('content')
<div class="container">
  <div class="row align-items-center">
    <div class="col-md-8 mx-auto">
        <br>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Start the form -->
        <br><br>
    <form method = "Post" action = "{{ route('posts.store') }}">
        @csrf
        <div class="form-group">
            <input type ="text" class="form-control" name="title" placeholder="Title of the Post">
        </div>
        <div class="form-group">
            <textarea name="body" class="form-control" rows = "10"> Body of the Post </textarea>
        </div>
        <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" id="validatedCustomFile" required>
                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
              </div>
              <br><br>
        <input type="hidden" name="user_id" value="Auth::user()->name;">
        <input type="submit" class="btn btn-sm btn-success" value="Add Post">
    </form>
    <br><br>
    </div>
  </div>
</div>
@endsection