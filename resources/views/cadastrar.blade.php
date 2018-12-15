@extends('template')
@section('conteudo-principal')

<div class="container">

<div class="row mt-4">
	<div class="col">
		<div class="alert alert-success">
			Criação de usuário.
		</div>
		<a class="btn btn-success btn-block" href="/">Voltar</a>
	</div>
</div>

<div class="row">
	<div class="col">		
		@foreach($errors->all() as $erro)
			<div class="alert alert-danger">{{ $erro }}</div>
		@endforeach
	</div>	
</div>

<div class="row justify-content-center mt-4">

<div class="col-8">

<form method="get" action="/clientes/cadastrar/">
{!! csrf_field() !!}	

<div class="form-group">
<label>Nome:</label>
<input maxlength="100" class="form-control" type="text" name="nome">
</div>

<div class="form-group">
<label>CPF:</label>
<input maxlength="14" class="form-control" type="text" name="cpf" id="cpf">
</div>

<div class="form-group">
<label>Data de Nascimento:</label>
<input class="form-control" type="date" name="dtnascimento">
</div>

<div class="form-group">
<label>Estado Civil:</label>
<select class="form-control" name="estadocivil">
	<option value="Casado(a)">Casado(a)</option>
	<option value="Solteiro(a)">Solteiro(a)</option>
	<option value="Viúvo(a)">Viúvo(a)</option>
	<option value="Divorciado(a)">Divorciado(a)</option>
</select>
</div>

<div class="form-group">
<label>Telefone</label>
<input maxlength="15" id="telefone" class="form-control" type="text" name="telefone">
</div>

<div class="form-group">
<label>Endereço:</label>
<input maxlength="100" class="form-control" type="text" name="endereco">
</div>

<div class="form-group">
<label>Usuário:</label>
<input maxlength="20" class="form-control" type="text" name="usuario">
</div>

<div class="form-group">
<label>Senha:</label>
<input maxlength="20" class="form-control" type="password" name="senha">
</div>

<div class="form-group">
	<button class="btn btn-success btn-block" type="submit">Cadastrar cliente</button>
</div>

</form>

</div>

</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>

<script type="text/javascript">

        $(document).ready(function () { 
        var $Cpf = $("#cpf");
        $Cpf.mask('000.000.000-00', {reverse: true});
        $('#telefone').mask('(00) 00000-0000');
    });
</script>

@stop