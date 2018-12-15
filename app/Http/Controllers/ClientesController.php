<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Clientes;

class ClientesController extends Controller
{

    public function listarclientes()
    {
		$clientes = Clientes::all();
		return view('listar', ['clientes' => $clientes]);
	}

	public function editar($id)
	{
		$clientes = Clientes::find($id);
		return view('editar' , ['clientes' => $clientes]);
	}

	public function deletar($id)
    {
        $clientes = Clientes::find($id);
        $clientes->delete();
        return redirect('/');
    }

   	public function form_cadastro()
    {
        return view('cadastrar');
    }


    public function cadastrar(Request $request)
    {
        $validador = \Validator::make(
            $request->all(), [
            'nome' => 'required|min:10',
            'cpf' => 'required',
            'dtnascimento' => 'required|date',
            'estadocivil' => 'required|string',
            'telefone' => 'required',
            'endereco' => 'required',
            'usuario' => 'required',
            'senha' => 'required',
        ]);

        if ($validador->passes()) {
        	$clientes = new Clientes();
    		$clientes->nome = $request->get('nome');
    		$clientes->cpf = $request->get('cpf');
    		$clientes->dtnascimento = $request->get('dtnascimento');
    		$clientes->estadocivil = $request->get('estadocivil');
    		$clientes->telefone = $request->get('telefone');
    		$clientes->endereco = $request->get('endereco');
    		$clientes->usuario = $request->get('usuario');
    		$clientes->senha = $request->get('senha');
    		$clientes->save();

		  return redirect('/');
        }else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validador);
        }
    }

    public function atualizar(Request $request, $id)
    {
        $clientes = Clientes::find($id);
    	$clientes->nome = $request->get('nome');
    	$clientes->cpf = $request->get('cpf');
    	$clientes->dtnascimento = $request->get('dtnascimento');
    	$clientes->estadocivil = $request->get('estadocivil');
    	$clientes->telefone = $request->get('telefone');
    	$clientes->endereco = $request->get('endereco');
    	$clientes->usuario = $request->get('usuario');
    	$clientes->senha = $request->get('senha');
        $clientes->save();

        return redirect('/');
    }

}
/*ok*/
