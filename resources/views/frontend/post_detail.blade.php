@extends('frontend.layouts.master')

@section('title', 'BM BLog')

@section('header')
<header class="masthead" style="background-image: url('{{ asset('frontend/img/post-bg.jpg') }}')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
          <h1>{{ $post->title }}</h1>
          <span class="meta">Posted by
            <a href="#">{{ $post->user->name }}</a>
            on {{ $post->created_at->toFormattedDateString() }}</span>
        </div>
      </div>
    </div>
  </div>
</header>
@endsection

@section('content')
<div class="container">
  <div class="row mb-5">
    <div class="col-lg-8 col-md-10 mx-auto">
      {!! $post->content !!}
    </div>
  </div>
  <!-- Related Projects Row -->
  <h3 class="my-4">Recent Posts</h3>
  <div class="row">
    @foreach ($posts as $post)
    <div class="col-md-3 col-sm-6 mb-4">
      <a href="{{ url("post/$post->id") }}">
        <b>{{ $post->title }}</b>
        <p>{!! str_limit($post->content, 100) !!}</p>
      </a>
    </div>
    @endforeach
  </div>
</div>
@endsection