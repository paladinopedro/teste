@extends('layout.master')

@section('title','Cadastro de Questoes')

@section('content')
    <form method="post" action="/questoes">
    @csrf
    <div class="form-group">
        <label for="enunciado">Descrição</label>
        <input type="text" class="form-control" name="enunciado" value="{{ old('enunciado') }}"/>
        @error('enunciado')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div>
        <input type="submit" class="btn btn-primary" value="Confirmar"/>
        <a href="/questoes" class="btn btn-danger">Voltar</a>
    </div>
    </form>
@endsection
