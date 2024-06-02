@extends('layouts.app')


@section('title', 'Cadastrar autores')

@section('content')

<div class="container mt-5">
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-10">
                <h1>Cadastre o Autor</h1>
            </div>
            <div class="col-sm-2">
                <a class="btn btn-primary mt-2" href="{{route('autores-index')}}">Cadastrados</a>
            </div>
        </div>
        <hr>
        <form action="{{route('autores-store')}}" method="POST">
            @csrf
            <div class="form-group">
                <div class="form-grop">
                    <label for="autor">Autor:</label>
                    <input class="form-control" type="text" name="autor" placeholder="Digite o autor">
                </div>
                <br>
                <div class="form-grop">
                    <label for="livro">Livro:</label>
                    <input class="form-control" type="text" name="livro" placeholder="Digite o nome do livro">
                </div>
                <br>
                <div class="form-grop">
                    <label for="valor">Valor:</label>
                    <input class="form-control" type="number" name="valor" placeholder="Digite o valor do livro">
                </div>
                <br>
                <div class="form-group">
                    <label for="data">Data de hoje:</label>
                    <input type="date" class="form-control" id="data" name="data" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>

    @endsection