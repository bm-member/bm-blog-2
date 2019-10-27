<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container">
        <div class="row my-3">
            <div class="col-md-8">
                <h3>All Posts</h3>
            </div>
            <div class="col-md-4 text-right">
                <a href="post/create" class="btn btn-primary">Create</a>
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
                    <a href="{{ url("post/$post->id/edit") }}" class="btn btn-success btn-sm">Edit</a>
                    <a href="{{ url("post/$post->id/delete") }}" class="btn btn-danger btn-sm">Del</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/app.js') }}"> </script>
</body>

</html>
