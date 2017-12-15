@extends('app')

@section('content')
<div class="container">
<h1>Nova Matrícula</h1>

@if ($errors->any())
<ul class="alert alert-warning">
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif

{!! Form::open(['route'=>'matriculas.store']) !!}

<!-- Nome Form Input -->

 <div class="form-group">
 {!! Form::label('nome', 'Nome:') !!}
 {!! Form::text('nome', null, ['class'=>'form-control']) !!}
 </div>

 <!-- Descricao Form Input -->

 <div class="form-group">
 {!! Form::label('cpf', 'CPF:') !!}
 {!! Form::text('cpf', null, ['class'=>'form-control']) !!}
 </div>

 <div class="form-group">
 {!! Form::label('curso', 'Curso:') !!}
 {!! Form::text('curso', null, ['class'=>'form-control']) !!}
 </div>

 <div class="form-group">
 {!! Form::label('periodo', 'Periodo:') !!}
 {!! Form::text('periodo', null, ['class'=>'form-control']) !!}
 </div>
 

 <div class="form-group">
 {!! Form::submit('Salvar Matrícula', ['class'=>'btn btn-primary']) !!}
 </div>

 {!! Form::close() !!}

 </div>
 @endsection