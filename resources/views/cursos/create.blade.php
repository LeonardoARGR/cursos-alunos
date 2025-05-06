@extends('layout.app')

@section('content')

<h1>Novo Curso</h1>

<form method="post" action="">
    @csrf
    <div class="bg-secondary ">
    <div class="">
        <label>Nome do Curso</label>
        <input type="text" name="nomeCurso" class="" required>
    </div>
    <div class="">
        <label>Descrição</label>
        <input type="text" name="descricao" class="" required>
    </div>
    <div class="">
        <label>Carga Horário</label>
        <input type="number" name="cargaHorariaCurso" class="" required>
    </div>
    <div class="">
        <label>Preço</label>
        <input type="number" name="valorCurso" class="" required>
    </div>

    <button type="submit" class="">Cadastrar</button>
    <a href="{{ route('cursos.index') }}">Cancelar</a>
    </div>
</form>