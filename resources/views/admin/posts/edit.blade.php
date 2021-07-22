@extends('layouts.admin')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<h1>Edit a Post</h1>
<form action="{{route('admin.posts.store')}}" method="post"></form>
@call_user_func
@method('PUT')

<div class="form-group">
  <label for="title">Title</label>
  <input type="text" name="" id="" class="form-control @error('title') is-invalid  @enderror" placeholder="add title"aria-describedby="titleHelper" value="{{$post->title}}">
  <small id="titleHelper" class="text-muted"> Type a title for the current post, max 255 char</small>
</div>

<div class="form-group">
  <label for="image">Cover Image</label>
  <input type="text" name="image" id="image" class="form-control @error('image') is-invalid  @enderror" placeholder="add a image https://" aria-describedby="imageHelper" value="{{$post->image}}">
  <small id="imageHelper" class="text-muted">Type an image url</small>
</div>

<div class="form-group">
  <label for="body">Body</label>
  <textarea name="body" id="body" class="form-control @error('title') is-invalid  @enderror"cols="30" rows="10"></textarea>
</div>

<button type="submit"></button>
@endsection