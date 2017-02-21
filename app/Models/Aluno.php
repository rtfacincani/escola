<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';

    public function medicamentos()
    {
        //return $this->hasMany(Medicamento::class);
        return $this->belongsToMany(Medicamento::Class,'aluno_medicamentos','aluno_id','medicamento_id');
    }
    //
}
