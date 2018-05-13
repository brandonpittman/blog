@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>

        <hr>

        <div id="comments" class="comments">
            <ul class="list-group">
                @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{ $comment->created_at->diffForHumans() }}:&nbsp;
                        </strong>
                        {{ $comment->body }}
                    </li>
                @endforeach
            </ul>
        </div>

        <hr>


        <div class="card" id="submit-comment">
            <div class="card-block">
                <form method="POST" action="/posts/{{$post->id}}/comments">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea class="form-control" name="body" cols="30" rows="10" placeholder="Your comment here, please." required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>

                @include('layouts.errors')
            </div>
        </div>
    </div>
@endsection
