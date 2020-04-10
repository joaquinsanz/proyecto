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
                    <div class="card-header">Área Personal</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <h2>Hola, {{ Auth::user()->name }}, bienvenido a tu área personal</h2>
                        <p>A continuación encontraras tus graficos de gastos: </p>
                        <ul>
                            <li>
                                graficos 1
                            </li>
                            <li>
                                graficos 2
                            </li>
                            <li>
                                graficos 3
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>