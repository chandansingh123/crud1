@extends('back.layouts.master')
@section('contents')
<section class="content-header">
    <div class="form-group">
        <label>Title</label>
        <p>{{ $post->title }}</p>
        <label>Description</label>
        <p>{{ $post->description }}</p>
        <label>Category</label>
        <p>{{ $post->category->title }}</p>
    </div>
</section>
@endsection