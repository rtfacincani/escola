<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    //
    //protected $table = 'medicamentos';
    //protected $fillable = ['Nome'];

    public function alunos()
    {
        return $this->belongsToMany(Aluno::class,'aluno_medicamentos','aluno_id','medicamento_id');
    }
}
