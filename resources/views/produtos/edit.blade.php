
@extends('app')
@section('content')
<div class="container">
<h1>Editar Matrícula nº: {{$produto->id}}</h1>
@if ($errors->any())
<ul class="alert alert-warning">
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif
{!! Form::open(['route'=>['produtos.update', $produto->id], 'method'=>'put']) !!}
<!-- Nome Form Input -->
<div class="form-group">
{!! Form::label('nome', 'Nome:') !!}
{!! Form::text('nome', $produto->nome, ['class'=>'form-control']) !!}
</div>
<!-- Descricao Form Input -->
<div class="form-group">
{!! Form::label('cpf', 'CPF:') !!}
{!! Form::text('cpf', $produto->cpf, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('curso', 'Curso:') !!}
{!! Form::text('curso', $produto->curso, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('periodo', 'Periodo:') !!}
{!! Form::text('periodo', $produto->periodo, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::submit('Salvar Produto', ['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
</div>
@endsection