<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Lista
    public function index(){
        
        //codigo para listar cursos ou objetos!

        //Carregar a VIEW!
        return view('curso.index');
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
    public function store(){
        dd('Cadastrar no banco de dados o novo curso');
        //não carregar uma VIEW retorna para uma pagina!
        
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
