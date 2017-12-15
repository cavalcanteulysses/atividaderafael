@extends('app')

@section('content')
<div class="container">
<h1>Alunos</h1>

<a href="{{ route('matriculas.create') }}" class="btn btn-default btn-success">Nova matrícula</a>
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

@foreach($matriculas as $matricula)
<tr>
<td>{{ $matricula->id }}</td>
<td>{{ $matricula->nome }}</td>
<td>{{ $matricula->curso }}</td>
<td>{{ $matricula->periodo }}</td>
<td>
<a href="{{ route('matriculas.edit',['id'=>$matricula->id]) }}" class="btn-sm btn-success">Editar</a>
<a href="{{ route('matriculas.destroy',['id'=>$matricula->id]) }}" class="btn-sm btn-danger">Remover</a>
</td>
</tr>
@endforeach

</tbody>
</table>
</div>
@endsection