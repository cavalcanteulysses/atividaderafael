@extends('app')

@section('content')
<div class="container">
<h1>Alunos</h1>

<a href="{{ route('produtos.create') }}" class="btn btn-default btn-success">Nova matrícula</a>
<br />
<br />
<table class="table table-striped table-bordered table-hover">
<thead>
<tr>
<th>Matrícula</th>
<th>Nome</th>
<th>Curso</th>
<th>Período</th>
<th>Ações   </th>
</tr>
</thead>
<tbody>

@foreach($produtos as $produto)
<tr>
<td>{{ $produto->id }}</td>
<td>{{ $produto->nome }}</td>
<td>{{ $produto->curso }}</td>
<td>{{ $produto->periodo }}</td>
<td>
<a href="{{ route('produtos.edit',['id'=>$produto->id]) }}" class="btn-sm btn-success">Editar</a>
<a href="{{ route('produtos.destroy',['id'=>$produto->id]) }}" class="btn-sm btn-danger">Remover</a>
</td>
</tr>
@endforeach

</tbody>
</table>
</div>
@endsection