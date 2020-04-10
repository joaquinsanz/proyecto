<head>

    <style>
    .main-img {
        background: url('https://cdn.pixabay.com/photo/2016/01/22/11/46/desktop-1155613_1280.jpg');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 200%;
        width: 100%;
    }
    </style>
</head>

<body class="main-img">


    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Área de contacto</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif


                        <p>Formulario de contacto: </p>

                        <div class="container">


                            <h1>Contact US Form</h1>

                            @if(Session::has('success'))


                            <div class="alert alert-success">

                                {{ Session::get('success') }}

                            </div>


                            @endif

                            {!! Form::open(['route'=>'contactus.store']) !!}

                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">

                                {!! Form::label('Name:') !!}

                                {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter
                                Name']) !!}

                                <span class="text-danger">{{ $errors->first('name') }}</span>

                            </div>

                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                {!! Form::label('Email:') !!}

                                {!! Form::text('email', old('email'), ['class'=>'form-control',
                                'placeholder'=>'Enter Email']) !!}
                                <span class="text-danger">{{ $errors->first('email') }}</span>

                            </div>

                            <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">

                                {!! Form::label('Message:') !!}

                                {!! Form::textarea('message', old('message'), ['class'=>'form-control',
                                'placeholder'=>'Enter Message']) !!}

                                <span class="text-danger">{{ $errors->first('message') }}</span>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-success">Contact US!</button>

                            </div>

                            {!! Form::close() !!}

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>