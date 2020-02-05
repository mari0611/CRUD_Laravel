<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class Cadastro extends Controller {
    public function index() {

        $usuarios = Usuario::all();
        return view('cadastro', compact('usuarios'));

    }

    public function display() {
        return view('usersdata');

    }

    
    public function store(Request $request) 
    
    {
        $this->validate($request, [
            
            'nome'=> 'required',
            'email'=> 'required',  
            'senha'=> 'required', 
        
    ]);

    $usuarios = new Usuario();

    $usuarios->id = $request->input('id');
    $usuarios->nome = $request->input('nome');
    $usuarios->email = $request->input('email');
    $usuarios->senha = $request->input('senha');
    

    $usuarios->save();

    return redirect('/cadastro');

    }

    public function edit($id) 
    {
        $usuarios = Usuario::find($id);        
        
        return view('edit', compact('usuarios', 'id'));
    }


    public function updatedata(Request $request, $id) {

        $this->validate($request, [
            'nome'=> 'required',
            'email'=> 'required',  
            'senha'=> 'required', 
        
        ]);

        $usuarios = Usuario::find($id);

        $usuarios->id = $request->input('id');
        $usuarios->nome = $request->input('nome');
        $usuarios->email = $request->input('email');
        $usuarios->senha = $request->input('senha');


        $usuarios->save();

        return redirect('cadastro');


    }
    
    public function deletedata($id)
    {
        $usuarios = Usuario::find($id);
        $usuarios->delete();

        return redirect('/cadastro');
    }
}

