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
                    <div class="card-header">Lista de gastos</div>
                        <br>
                        <a class="btn btn-primary" href="/listas/create">Crear Lista</a>
                        <br>
                        <table class="table-striped">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripocion</th>
                                <th>Numero de paticipantes</th>
                                <th>Saldo</th>
                            </tr>
                        
                        @forelse($listas as $lista)
                            <tr>
                                <td>{{ $lista->id }}</td>
                                <td>{{ $lista->name }}</td>
                                <td>{{ $lista->descripcion }}</td>
                                <td>{{ $lista->paticipantes }}</td>
                                <td>{{ $lista->saldo }}</td>
                                @can('viewAny',$lista)
                                <td><a class="btn btn-primary" href="/listas/{{ $lista->id }}">Ver</td>
                                @endcan
                                @can('update',$lista)
                                <td><a class="btn btn-primary" href="/listas/{{ $lista->id }}/edit">Editar</td>
                                @endcan
                                <td><form action="/listas/{{ $lista->id }}" method="post">

                                @csrf
                                    @can('delete',$lista)
                                    <input type="hidden" name="_method" value="delete"/><br/>
                                    <input class="btn btn-primary"  type="submit" value="borrar"/>
                                    @endcan
                                </form></td>
                            </tr>
                        @empty<tr><td><i>No hay listas de gastos</i></td></tr>
                        @endforelse
                        </table>
                        {{ $listas->render() }}
                        @endsection
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>