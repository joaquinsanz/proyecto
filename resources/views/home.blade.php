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
                    <div class="card-header">Bienvenido</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <h2>Hola, {{ Auth::user()->name }} encantado de verte de nuevo por aquí</h2>
                        {{-- aqui estará el historial 
                        El la ultima lista es:
                        @if (Session::get('lastlist'))
                        {{ Session::get('lastlist')->name }}
                        <a href="/lists/forget"> Olvidar último libro</a>
                        @else
                        Ninguno
                        @endif
                        <hr>
                        Los libros visitrados son:
                        @if (Session::get('lists'))
                        @foreach(Session::get('lists') as $index => $list)
                        <li>{{ $index }} - {{$list->name}}</li>
                        @endforeach
                        @else
                        No has visto ninguno todavía
                        @endif
                        --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>