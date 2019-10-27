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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>Edit Post</h3>
                <form action="{{ url("post/$post->id/edit") }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" class="form-control">
                            {{ $post->content }}
                        </textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                    <a href="{{ url('post') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/app.js') }}"> </script>
</body>

</html>
