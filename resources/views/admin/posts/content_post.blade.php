<div class="container">
    <div class="row">

        <div class="col-md-8">

            <h1>Новый пост</h1>

            {!! Form::open(['url'=>route('admin_add_post_p'), 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}


            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                {!! Form::label('name', 'Название', ['class' => 'require']) !!}
                {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=> 'Ссылка']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('text', 'Текст', ['class' => 'require']) !!}
                {!! Form::textarea('text', old('text'), ['class'=>'form-control', 'placeholder'=> 'Текст', 'rows'=>'5']) !!}
            </div>

            <div class="form-group">

                {{ Form::select('tag-select',

                [1, 2, 3],

                null,
                ['class' => 'selectpicker', 'multiple']) }}

{{--


                <select class="selectpicker" multiple title="Тег">
                    @if(isset($tags) && is_object($tags))
                        @foreach($tags as $tag)
                            <option>{{ $tag->title }}</option>
                        @endforeach
                    @endif


                </select>
--}}

                <button class="btn btn-default">
                    Создать тег
                </button>
            </div>


            <div class="form-group">
                <div>
                    {!! Form::file('image', ['class'=>'filestyle', 'data-text'=>'Выберите изображение', 'data-btnClass'=>'btn-primary', 'data-placeholder'=>'Файла нет' ]) !!}
                </div>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Сохранить
                </button>
                <button class="btn btn-default">
                    Отменить
                </button>
            </div>
            {!! Form::close() !!}


        </div>

    </div>
</div>
