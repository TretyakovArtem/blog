<div class="container">
    <div class="row">
        @if(isset($tags) && is_object($tags))
            @foreach($tags as $tag)
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9">
                <h4><a href="/admin/posts/{{ $tag->id }}/edit">{{ $tag->title }}</a></h4>
            </div>
        </div>
        <hr>
            @endforeach
        @endif
    </div>
</div>
