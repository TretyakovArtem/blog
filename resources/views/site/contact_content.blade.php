
<div class="col-lg-8">
    <div class="row">
        <div class="col-lg-12">
            <div class="info">
                <h3>Контакты</h3>
                <p><b>E-mail:</b> artem.tretyakov.91@inbox.ru</p>
                <p><b>Telegram:</b> @TretyakovArtem</p>
            </div>
        </div>
    </div>


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
            {!! Form::label('text', 'Сообщение', ['class' => 'require']) !!}
            {!! Form::textarea('text', null, ['class'=>'form-control', 'rows'=>'10']) !!}
        </div>

        <div class="form-group col-md-12">
            <button type="submit" class="btn btn-primary">
                Отправить
            </button>
        </div>

        {!! Form::close() !!}

    </div>
    <div class="row">
        <div class="col-lg-12">

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            @if(count($errors) == 0)
            <div class="alert alert-success">
                <ul>
                    <li>Сообщение отправлено</li>
                </ul>
            </div>
        @endif
        </div>
    </div>
</div>
