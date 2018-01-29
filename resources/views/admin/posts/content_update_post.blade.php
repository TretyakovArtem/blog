<div class="container">
    <div class="row">

        <div class="col-md-8">

            <h1>Create post</h1>

            {!! Form::open(['url'=>route('admin_edit_post_p', ['id'=>$post->id]), 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}


            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                {!! Form::label('name', 'Название', ['class' => 'require']) !!}
                {!! Form::text('name', $post->name, ['class'=>'form-control', 'placeholder'=> 'Ссылка']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('text', 'Текст', ['class' => 'require']) !!}
                {!! Form::textarea('text', $post->text, ['class'=>'form-control', 'placeholder'=> 'Текст', 'rows'=>'5']) !!}
            </div>

            <div class="form-group">
                {!! Form::select('tag-select[]', $tags, null, ['class' => 'selectpicker', 'multiple', 'title' => 'Тег']) !!}
            </div>

            <div class="form-group">
                <div>
                    {!! Form::file('image', ['class'=>'filestyle', 'data-text'=>'Выберите изображение', 'data-btnClass'=>'btn-primary', 'data-placeholder'=>'Файла нет' ]) !!}
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Create
                </button>
                <button class="btn btn-default">
                    Cancel
                </button>

            </div>

            {!! Form::close() !!}

            <a href="{{ route('admin_delete_post', ['id' => $post->id]) }}" class="btn btn-warning">Удалить</a>

        </div>

    </div>
</div>
