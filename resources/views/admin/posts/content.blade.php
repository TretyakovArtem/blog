<div class="container">
    <div class="row">
        @if(isset($posts) && is_object($posts))
            @foreach($posts as $post)
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <a href="/admin/posts/{{ $post->id }}/edit">
                    <img src="{{ asset('assets/img').'/'.$post->url }}" class="img-responsive img-box img-thumbnail">
                </a>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9">
                <h4><a href="/admin/posts/{{ $post->id }}/edit">{{ $post->name }}</a></h4>
                <p>{{ str_limit($post->text, 80) }}</p>
            </div>
        </div>
        <hr>
            @endforeach
        @endif
    </div>
</div>
