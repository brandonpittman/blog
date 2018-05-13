<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/posts/{{ $post->id }}">
            {{ $post->title }}
        </a>
    </h2>
    <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} by <a href="#">Brandon</a></p>

    <p>{{ $post->body }}</p>

    <p><a href="/posts/{{ $post->id }}/#comments">{{ count($post->comments) }} comments</a></p>
    <p><a href="/posts/{{ $post->id }}/#submit-comment">Leave a comment</a></p>
</div><!-- /.blog-post -->
