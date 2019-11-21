@extends('frontend.layouts.master')

@section('title', 'BM BLog')

@section('header')
<header class="masthead" style="background-image: url('{{ asset('frontend/img/home-bg.jpg') }}')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>BM Blog</h1>
          <span class="subheading">Here is blog project sample by laravel.</span>
        </div>
      </div>
    </div>
  </div>
</header>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">

      @foreach ($posts as $post)
      <div class="post-preview">
        <a href="{{ url("post/$post->id") }}">
          <h2 class="post-title">
            {{ $post->title }}
          </h2>
          <h3 class="post-subtitle">
            {!! str_limit($post->content, 100) !!}
          </h3>
        </a>
        <p class="post-meta">Posted by
          <a href="#">{{ $post->user->name }}</a>
          on {{ $post->created_at->toFormattedDateString() }}</p>
      </div>
      <hr>
      @endforeach

      <!-- Pager -->
      <div class="clearfix">
        {{ $posts->links() }}
        {{-- <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a> --}}
      </div>
    </div>
  </div>
</div>
@endsection