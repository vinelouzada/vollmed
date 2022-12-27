<?php

namespace App\Models\Medico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome','email','telefone','crm','especialidade'
    ];

    public function enderecos()
    {
        return $this->hasOne(EnderecoMedico::class,"medico_id");
    }
}
