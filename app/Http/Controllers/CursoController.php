<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Lista
    public function index(){
        
        //Recuperar os registros do banco de dados!
        $cursos = curso::orderByDesc('created_at')->paginate(8);
        //dd($cursos);
        //Carregar a VIEW!
        return view('curso.index', ['cursos'=> $cursos]);
    }

    //detalhes
    public function show(Request $request){
       
        //Recuperar as informaçõe do banco de dados e envia para a view show
        $curso= Curso::where('id', $request->curso)->first();

        //Carregar a VIEW!
        return view('curso.show',['curso' => $curso]);
    }
    //Carregar o formulario cadastrar novo curso!
    public function create(){

        //Carregar a VIEW!
        return view('curso.create');
    }
    //Cadastrar no banco de dados o novo curso
    public function store(Request $request){
       //não carregar uma VIEW retorna para uma pagina! 
        //dd($request);
        
        //Cadastea no banco de dados ns tsbrls cursos os valores de todos os dados
        $curso = Curso::create($request->all());
        
        // Redirecionar o usuário e enviar mensagen de sucesso
        return redirect()->route('curso.show', ['curso'=> $curso->id])->with('success','Curso cadastrado com sucesso!');
        //return redirect()->route('curso.show')->with('success', 'Curso editado com sucesso!');
    }

     //Carregar o formulario editar curso!
     public function edit(Request $request, Curso $curso){

        //$curso = Curso::where('id', $request->curso)->first();
        //dd($curso);
        //Carregar a VIEW!
        return view('curso.edit', ['curso' => $curso]);
    }
    //Edita no banco de dados um curso existente
    public function update(Request $request, Curso $curso){
        
        $curso->update(['name' => $request->name]);
        return redirect()->route('curso.show', ['curso' => $request->curso])->with('success', 'Curso editado com sucesso!');
        //não carregar uma VIEW retorna para uma pagina!
        
    }

    //Exclui o curso no banco de dados
    public function destroy(Curso $curso){
        //Exclui o registro no banco de dados!
        $curso->delete();
        //Redirecionar o usuario para pagina de cursos e menssagen de sucesso!
        return redirect()->route('curso.index')->with('success', 'Curso excluido com sucesso!');
    }
}
