<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Lista
    public function index(){
        
        //Recuperar os registros do banco de dados!
        $cursos = curso::orderByDesc('created_at')->paginate(1);
        //dd($cursos);
        //Carregar a VIEW!
        return view('curso.index', ['cursos'=> $cursos]);
    }

    //detalhes
    public function show(){

        //Carregar a VIEW!
        return view('curso.show');
    }
    //Carregar o formulario cadastrar novo curso!
    public function create(){

        //Carregar a VIEW!
        return view('curso.create');
    }
    //Cadastrar no banco de dados o novo curso
    public function store(Request $request){
       //não carregar uma VIEW retorna para uma pagina! 

        
        //Cadastea no banco de dados ns tsbrls cursos os valores de todos os dados
        Curso::create($request->all());
        
        // Redirecionar o usuário e enviar mensagen de sucesso
        return redirect()->route('curso.show')->with('success', 'Curso cadastrado com sucesso!');
    }

     //Carregar o formulario editar curso!
     public function edit(){

        //Carregar a VIEW!
        return view('curso.edit');
    }
    //Edita no banco de dados um curso existente
    public function update(){
        dd('Edita no banco de dados um curso existente');
        //não carregar uma VIEW retorna para uma pagina!
        
    }

    //Exclui o curso no banco de dados
    public function destroy(){
        dd('Exclui no banco de dados um curso existente');
        //não carregar uma VIEW retorna para uma pagina!
        
    }
}
