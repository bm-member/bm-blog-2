@extends('backend.layouts.master')

@section('title', 'Create Post')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Create Post</h3>
            <form action="{{ url('admin/post') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea name="content" class="form-control"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Create</button>
                <a href="{{ url('post') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
</div>

@endsection
