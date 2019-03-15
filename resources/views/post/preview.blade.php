<!-- begin post -->
<div class="authorpostbox">
    <div class="card">
        @php
            $post_url = route('post.show', ['post' => $post->id]);
        @endphp
        {{--
        <a href="{{ $post_url }}">
            <img class="img-fluid img-thumb" src="assets/img/demopic/8.jpg" alt="">
        </a>
        --}}
        <div class="card-block">
            <h2 class="card-title"><a href="{{ $post_url }}">{{ $post->title }}</a></h2>
            <h4 class="card-text">{{ str_limit($post->content, 800) }}</h4>
               <div class="metafooter">
                <div class="wrapfooter">
                    <span class="author-meta">
                        <span class="post-name"><a href="#">{{ $post->user->full_name }}</a></span><br/>
                        <span class="post-date">{{ $post->created_at->format('d.m.Y') }}</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end post -->
