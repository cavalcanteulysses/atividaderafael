@extends('app')

@section('content')
<div class="container">
<h1>Novo Processo</h1>

@if ($errors->any())
<ul class="alert alert-warning">
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif

{!! Form::open(['route'=>'compras.store']) !!}

<!-- Tipo Form Input -->

 <div class="form-group">
 {!! Form::label('tipo', 'Tipo:') !!}
 {!! Form::text('tipo', null, ['class'=>'form-control']) !!}
 </div>

 <!-- Descricao Form Input -->

 <div class="form-group">
 {!! Form::label('descricao', 'Descrição:') !!}
 {!! Form::textarea('descricao', null, ['class'=>'form-control']) !!}
 </div>

 <!-- Responsavel Form Input -->

 <div class="form-group">
 {!! Form::label('responsavel', 'Responsavel:') !!}
 {!! Form::text('responsavel', null, ['class'=>'form-control']) !!}
 </div>

<!-- Data da Inclusão Form Input -->

<div class="form-group">
 {!! Form::label('inclusao', 'Data da Inclusão:') !!}
 {!! Form::date('inclusao', null, ['class'=>'form-control']) !!}
 </div>


 <div class="form-group">
 {!! Form::label('documento', 'Documento:') !!}
 {!!Form::select('documento_id', $documentos->pluck('tipo','id'), ['class' => 'form-control'])!!}
 </div>

 <div class="form-group">
 {!! Form::label('local', 'Local:') !!}
 {!! Form::number('local_id', null, ['class'=>'form-control']) !!}
 </div>

 <div class="form-group">
 {!! Form::submit('Salvar Processo', ['class'=>'btn btn-primary']) !!}
 </div>

 {!! Form::close() !!}

 </div>
 @endsection