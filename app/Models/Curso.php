<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //Indicar o nome da tabela
    protected $table = 'cursos';

    //Indicar quais colunas podem ser cadastrada
    protected $fillable = ['name'];
}
