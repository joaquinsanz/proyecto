@extends('layouts.app')

@section('content')
    <h1>Crear Lista de gastos</h1>
    <form action="/listas" method="post">
    @csrf
    <label for="name">Nombre</label>
    <input type="text" name="name" value="{{ old('name') }}">
    {{$errors->first('name')}}
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" value="{{ old('descripcion') }}">
    {{$errors->first('descripcion')}}
    <br>
    <br>
    <label for="saldo">Precio</label>
    <input type="number" name="saldo" value="{{ old('saldo') }}">
    {{$errors->first('saldo')}}
    <br>
    <br>
    <label for="participantes">Participantes</label>
    <select class="form-control" multiple="multiple" name="participantes[]" id="participantes" >
    @foreach  ($users as $user)
        <!--TODO-->
        <option value="{{ $user->id }}">{{ $user->name }}</option>
        
    @endforeach
    </select>
   
  
    <input type="submit" value="Nuevo">
    </form>
    @endsection