@extends('backend.layouts.master')

@section('title', 'All Posts')

@section('content')

<div class="container">

    <div class="row my-3">
        <div class="col-md-12">
            @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>
        <div class="col-md-8">
            <h3>All Posts</h3>
        </div>
        <div class="col-md-4 text-right">
            <a href="post/create" class="btn btn-primary">
                <i class="fas fa-plus-circle"></i>
                Create
            </a>
        </div>
    </div>

    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-header">
                    {{ $post->title }}
                </div>
                <div class="card-body">
                    {{ $post->content}}
                </div>
                <div class="card-footer text-right">
                    <a href="{{ url("admin/post/$post->id/edit") }}" class="btn btn-success btn-sm">
                        <i class="fas fa-edit"></i>
                        Edit
                    </a>
                    <a href="{{ url("admin/post/$post->id/delete") }}" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash-alt"></i>
                        Del
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row justify-content-center">
        {{ $posts->links() }}
    </div>
    
</div>

@endsection
{{-- @stop --}}
