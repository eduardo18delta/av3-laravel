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
 
}
