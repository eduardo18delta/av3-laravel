@extends('template')
@section('conteudo-principal')

<div class="container">

<div class="row mt-4">
	<div class="col">
		<div class="alert alert-success">
			Edição de usuário.
		</div>
	</div>
</div>

<div class="row justify-content-center mt-4">

<div class="col-8">

<form method="get" action="/clientes/{{$clientes['id']}}/editarcliente">
{!! csrf_field() !!}	

<div class="form-group">
<label>Nome:</label>
<input value="{{$clientes['nome']}}" class="form-control" type="text" name="nome">
</div>

<div class="form-group">
<label>CPF:</label>
<input value="{{$clientes['cpf']}}"class="form-control" type="text" name="cpf">
</div>

<div class="form-group">
<label>Data de Nascimento:</label>
<input value="{{$clientes['dtnascimento']}}" class="form-control" type="date" name="dtnascimento">
</div>

<div class="form-group">
<label>Estado Civil:</label>
<input value="{{$clientes['estadocivil']}}"class="form-control" type="text" name="estadocivil">
</div>

<div class="form-group">
<label>Telefone</label>
<input value="{{$clientes['telefone']}}" class="form-control" type="text" name="telefone">
</div>

<div class="form-group">
<label>Endereço:</label>
<input value="{{$clientes['endereco']}}" class="form-control" type="text" name="endereco">
</div>

<div class="form-group">
<label>Usuário:</label>
<input value="{{$clientes['usuario']}}" class="form-control" type="text" name="usuario">
</div>

<div class="form-group">
<label>Senha:</label>
<input value="{{$clientes['senha']}}" class="form-control" type="text" name="senha">
</div>

<div class="form-group">	
	<input type="submit" class="btn btn-success btn-block" onclick="return confirm('Deseja realmente editar?');" name="enviar" value="Editar">
</div>

</form>

</div>

</div>

</div>

@stop