@extends('layout')


@section('content')
    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">Brandon's Laravel Test Blog</h1>
            <p class="lead blog-description">This is merely a test app built to work through the Laracasts Laravel tutorial series.</p>
        </div>
    </div>

    <div class="col-sm-8 blog-main">

        <a href="/posts/create">Create blog post</a>

        <br>
        <br>
        <br>

        @foreach($posts as $post)
            @include('posts.post')
        @endforeach

        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

    </div><!-- /.blog-main -->
@endsection
