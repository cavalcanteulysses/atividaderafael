@extends('app')

@section('content')
<div class="container">
<h1>Processos</h1>

<a href="{{ route('compras.create') }}" class="btn btn-default">Novo produto</a>
<br />
<br />
<table class="table table-striped table-bordered table-hover">
<thead>
<tr>
<th>ID</th>
<th>Tipo</th>
<th>Descrição</th>
<th>Responsável</th>
<th>Data da Inclusão</th>
<th>Local</th>
<th>Documento</th>
<th>Ações</th>
</tr>
</thead>
<tbody>

@foreach($processos as $processo)
<tr>
<td>{{ $processo->id }}</td>
<td>{{ $processo->tipo }}</td>
<td>{{ $processo->descricao }}</td>
<td>{{ $processo->responsavel }}</td>
<td>{{ $processo->inclusao }}</td>
<td>{{ $processo->local->nome }}</td>
<td>{{ $processo->documento->tipo }}</td>
<td>
<a href="#" class="btn-sm btn-success">Editar</a>
<a href="{{ route('compras.destroy',['id'=>$processo->id]) }}" class="btn-sm btn-danger">Remover</a>
</td>
</tr>
@endforeach

</tbody>
</table>
</div>
@endsection