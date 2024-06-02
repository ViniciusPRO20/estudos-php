@extends('layouts.app')


@section('title', 'Autores')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-10">
            <h1>Autores</h1>
        </div>
        <div class="col-sm-2">
            <a class="btn btn-primary mt-2" href="{{route('autores-create')}}">Novo autor</a>
        </div>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Autor</th>
                <th scope="col">Livro</th>
                <th scope="col">Valor</th>
                <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($autores as $autor)
                <tr>
                    <th scope="row">{{$autor->id}}</th>
                    <td>{{$autor->autor}}</td>
                    <td>{{$autor->livro}}</td>
                    <td>{{$autor->valor}}</td>
                    <td>{{date('d/m/y', strtotime($autor->data))}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection