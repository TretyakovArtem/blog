<section id="blog-section" >
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    {!! Form::open(['url'=>route('contacts_p'), 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}


                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group col-md-6">
                        {!! Form::label('name', 'Имя', ['class' => 'require']) !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-md-6">
                        {!! Form::label('email', 'E-mail', ['class' => 'require']) !!}
                        {!! Form::text('email', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-md-12">
                        {!! Form::textarea('text', null, ['class'=>'form-control', 'placeholder'=> 'Сообщение', 'rows'=>'10']) !!}
                    </div>

                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary">
                            Отправить
                        </button>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>

            <!--           // RECENT POST===========-->
            <div class="col-lg-4">
                <div class="widget-sidebar">
                    <h2 class="title-widget-sidebar">// ПОСЛЕДНИЕ ПОСТЫ</h2>
                    <div class="content-widget-sidebar">
                        <ul>
                            @if(isset($lastPosts) && is_object($lastPosts))
                                @foreach($lastPosts as $lpost)
                                    <li class="recent-post">
                                        <div class="post-img">
                                            <img src="{{ asset('assets/img').'/'.$lpost->url }}" class="img-responsive">
                                        </div>
                                        <a href="/posts/{{ $post->id }}"><h5>{{ $lpost->name }}</h5></a>
                                        <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> {{ Carbon\Carbon::parse($lpost->created_at)->formatLocalized('%d %B %Y') }}</small></p>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>

                <div class="widget-sidebar">
                    <h2 class="title-widget-sidebar">// АРХИВ</h2>
                    <div class="last-post">
                        <button class="accordion">21/4/2016</button>
                        <div class="panel">
                            <li class="recent-post">
                                <div class="post-img">
                                    <img src="https://lh3.googleusercontent.com/-13DR8P0-AN4/WM1ZIz1lRNI/AAAAAAAADeo/XMfJ7CM-pQg9qfRuCgSnphzqhaj3SQg6QCJoC/w424-h318-n-rw/thumbnail4.jpg" class="img-responsive">
                                </div>
                                <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                            </li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="last-post">
                        <button class="accordion">5/7/2016</button>
                        <div class="panel">
                            <li class="recent-post">
                                <div class="post-img">
                                    <img src="https://lh3.googleusercontent.com/-QlnwuVgbxus/WM1ZI1FKQiI/AAAAAAAADeo/nGSd1ExnnfIfIBF27xs8-EdBdfglqFPZgCJoC/w424-h318-n-rw/thumbnail2.jpg" class="img-responsive">
                                </div>
                                <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                            </li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="last-post">
                        <button class="accordion">15/9/2016</button>
                        <div class="panel">
                            <li class="recent-post">
                                <div class="post-img">
                                    <img src="https://lh3.googleusercontent.com/-wRHL_FOH1AU/WM1ZIxQZ3DI/AAAAAAAADeo/lwJr8xndbW4MHI-lOB7CQ-14FJB5f5SWACJoC/w424-h318-n-rw/thumbnail5.jpg" class="img-responsive">
                                </div>
                                <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                            </li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="last-post">
                        <button class="accordion">2/3/2017</button>
                        <div class="panel">
                            <li class="recent-post">
                                <div class="post-img">
                                    <img src="https://lh3.googleusercontent.com/-QlnwuVgbxus/WM1ZI1FKQiI/AAAAAAAADeo/nGSd1ExnnfIfIBF27xs8-EdBdfglqFPZgCJoC/w424-h318-n-rw/thumbnail2.jpg" class="img-responsive">
                                </div>
                                <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                            </li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>

                <!--=====================
                       CATEGORIES
                  ======================-->
                <div class="widget-sidebar">
                    <h2 class="title-widget-sidebar">// CATEGORIES</h2>
                    <button class="categories-btn">Audio</button>
                    <button class="categories-btn">Blog</button>
                    <button class="categories-btn">Gallery</button>
                    <button class="categories-btn">Images</button>
                </div>

                <!--=====================
                      NEWSLATTER
               ======================-->
                <div class="widget-sidebar">
                    <h2 class="title-widget-sidebar">// NEWSLATTER</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut .</p>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <button type="button" class="btn btn-warning">Warning</button>
                </div>


            </div>
        </div>
    </div>

</section>
