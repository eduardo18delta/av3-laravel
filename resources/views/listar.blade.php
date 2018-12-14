@extends('template')
@section('conteudo-principal')

<div class="container-fluid">

<div class="row">
	<div class="col">
		<div class="alert alert-primary mt-4">Lista de Clientes</div>
	</div>
</div>

<div class="row">
	<div class="col">
		<a class="btn btn-success btn-block" href="/cliente/criar">Criar cliente</a>
	</div>
</div>

<table class="table table-striped table-hover mt-4">
	<thead>
		<th>Id:</th>
		<th>Nome:</th>
		<th>CPF:</th>
		<th>Dt Nasc:</th>
		<th>Est. Civil:</th>
		<th>Tel:</th>
		<th>Endereço:</th>
		<th>Usuário:</th>
		<th>Senha:</th>
		<th>Editar:</th>
		<th>Apagar:</th>
	</thead>
	<tbody>
@foreach($clientes as $cliente)
	<tr>
		<td>{{$cliente['id']}}</td>
		<td>{{$cliente['nome']}}</td>
		<td>{{$cliente['cpf']}}</td>
		<td>{{$cliente['dtnascimento']}}</td>
		<td>{{$cliente['estadocivil']}}</td>
		<td>{{$cliente['telefone']}}</td>
		<td>{{$cliente['endereco']}}</td>
		<td>{{$cliente['usuario']}}</td>
		<td>************</td>
		<td><a class="btn btn-info" href="/clientes/{{$cliente['id']}}/editar">Editar dados pessoais</a></td>
		<td><a onclick="return confirm('Deseja realmente apagar?');" class="btn btn-info" href="/clientes/{{$cliente['id'] }}/deletar">Deletar</button></td>
	</tr>
@endforeach
	</tbody>
</table>

</div>

@stop