<?php

namespace App\Models\Medico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnderecoMedico extends Model
{
    use HasFactory;
    protected $table = "enderecos_medicos";
    protected $fillable = ['logradouro','bairro','cep','cidade','uf','numero','complemento','medico_id'];

    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }
}
