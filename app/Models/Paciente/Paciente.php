<?php

namespace App\Models\Paciente;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;


    public function enderecos()
    {
        return $this->hasOne(EnderecoPaciente::class,"paciente_id");
    }
}
