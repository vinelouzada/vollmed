<?php

namespace App\Http\Controllers\Api\Medicos;

use App\Http\Controllers\Controller;
use App\Models\Medico\EnderecoMedico;
use App\Models\Medico\Medico;
use Illuminate\Http\Request;

class MedicosController extends Controller
{
    public function buscarTodos()
    {
        return Medico::with("enderecos")->get();
    }

    public function buscarApenas(Request $request)
    {
        return Medico::findOrFail($request->medico);
    }

    public function cadastrar(Request $request)
    {

        $medico = Medico::create(
                [
                    "nome" => $request->nome,
                    "email" => $request->email,
                    "telefone" => $request->telefone,
                    "crm" => $request->crm,
                    "especialidade"=> $request->especialidade
                ]
        );

        $enderecoMedico = EnderecoMedico::create(
                [
                    "logradouro" => $request->logradouro,
                    "bairro" => $request->bairro,
                    "cep" => $request->cep,
                    "cidade" => $request->cidade,
                    "uf" => $request->uf,
                    "numero" => $request->numero,
                    "complemento" => $request->complemento,
                    "medico_id" => $medico->id
                ]
        );
    }

    public function atualizar(Medico $medico, Request $request)
    {

       return $medico->update($request->all());
    }

    public function excluir(Medico $medico, Request $request)
    {
        $medico->deleteOrFail();
        return response()->noContent();
    }
}
