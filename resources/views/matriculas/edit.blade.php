
@extends('app')
@section('content')
<div class="container">
<h1>Editar Matrícula nº: {{$matricula->id}}</h1>
@if ($errors->any())
<ul class="alert alert-warning">
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif
{!! Form::open(['route'=>['matriculas.update', $matricula->id], 'method'=>'put']) !!}
<!-- Nome Form Input -->
<div class="form-group">
{!! Form::label('nome', 'Nome:') !!}
{!! Form::text('nome', $matricula->nome, ['class'=>'form-control']) !!}
</div>
<!-- Descricao Form Input -->
<div class="form-group">
{!! Form::label('cpf', 'CPF:') !!}
{!! Form::text('cpf', $matricula->cpf, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('curso', 'Curso:') !!}
{!! Form::text('curso', $matricula->curso, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('periodo', 'Periodo:') !!}
{!! Form::text('periodo', $matricula->periodo, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::submit('Salvar Produto', ['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
</div>
@endsection