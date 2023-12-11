<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    //Indica o nome da tabela
    protected $table = 'aulas';

    //Indica quais colunas podem ser cadastradas
    protected $fillable = ['name', 'description', 'curso_id'];
}
