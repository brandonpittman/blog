@extends('layout')


@section('content')
<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">An example blog template built with Bootstrap.</p>
    </div>
</div>


        <div class="col-sm-8 blog-main">

            <a href="/posts/create">Create blog post</a>

            <br>
            <br>
            <br>



            @foreach($posts as $post)
            <div class="blog-post">
                <h2 class="blog-post-title">{{ $post->title }}</h2>
                <p class="blog-post-meta">{{ $post->created_at }} by <a href="#">Brandon</a></p>

                <p>{{ $post->body }}</p>
            </div><!-- /.blog-post -->
            @endforeach

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>

        </div><!-- /.blog-main -->
@endsection
