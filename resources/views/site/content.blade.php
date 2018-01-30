<div class="col-lg-8">
    <div class="row">
            @if(isset($posts) && is_object($posts))
                @foreach($posts as $post)
                <div class="col-lg-6 col-md-6">
                    <aside>
                        <img src="{{ asset('assets/img').'/'.$post->url }}" class="img-responsive">
                        <div class="content-title">
                            <div class="text-center">
                                <h3><a href="/posts/{{ $post->id }}">{{ $post->name }}</a></h3>
                            </div>
                        </div>
                        <div class="content-footer">
                            @if($post->tags->isNotEmpty())
                                @foreach($post->tags as $tag)
                                    <span style="font-size: 16px;padding:4px;color:white;background-color: {{ $tag->color }};">{{ $tag->title }}</span>
                                @endforeach
                            @else
                                <span style="font-size: 16px;color: #fff;">Без тега</span>
                            @endif
                            <span class="pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>
                            </span>
                        </div>
                    </aside>
                </div>
                @endforeach
            @endif
    </div>
</div>
