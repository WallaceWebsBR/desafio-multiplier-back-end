<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\EmpresaRequest;
use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;
use Illuminate\Support\Facades\Response;

class EmpresaController extends BaseController
{

    /**
     * @OA\Get(
     *     path="/api/empresas",
     *     summary="List all Empresas",
     *     tags={"Empresas"},
     *     @OA\Response(response="200", description="Lista de empresas"),
     * )
     *
     * @return Response
     * @throws Exception
     */
    public function index()
    {
        $empresas = Empresa::all();
        return $empresas;
    }


    /**
     * @OA\Post(
     *     path="/api/empresas",
     *     summary="Create a new empresa",
     *     tags={"Empresas"},
     *     @OA\RequestBody(
     *         required=true,
     *         description="Dados da empresa",
     *         @OA\JsonContent(
     *             required={"razao_social", "nome_fantasia", "cnpj", "endereco", "cidade", "estado", "pais", "telefone", "email"},
     *             @OA\Property(property="razao_social", type="string", example="Minha Empresa Ltda"),
     *             @OA\Property(property="nome_fantasia", type="string", example="Minha Empresa"),
     *             @OA\Property(property="cnpj", type="string", example="12345678901234"),
     *             @OA\Property(property="endereco", type="string", example="123 Rua Principal"),
     *             @OA\Property(property="cidade", type="string", example="Cidade"),
     *             @OA\Property(property="estado", type="string", example="SP"),
     *             @OA\Property(property="pais", type="string", example="Brasil"),
     *             @OA\Property(property="telefone", type="string", example="(11) 9999-9999"),
     *             @OA\Property(property="email", type="string", example="contato@minhaempresa.com"),
     *         ),
     *     ),
     *     @OA\Response(response="200", description="Empresa criada com sucesso"),
     *     @OA\Response(response="422", description="Erro de validação"),
     * )
     */
    public function create(EmpresaRequest $empresa)
    {
        $empresa->validate();
        Empresa::create($empresa->all());
        return Response::json('Empresa criada', 201);
    }

    /**
     * @OA\Put(
     *     path="/api/empresas/{id}",
     *     summary="Update empresa by ID",
     *     tags={"Empresas"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Empresa",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response="204", description="Empresa atualizada com sucesso"),
     * )
     */
    public function update(int $id, EmpresaRequest $empresa)
    {
        $empresa->validate();
        $empresa = Empresa::find($id);
        $empresa->update($empresa->all());
        return Response::json('Empresa atualizada', 204);
    }


    /**
     * @OA\Delete(
     *     path="/api/empresas/{id}",
     *     summary="Delete empresa by ID",
     *     tags={"Empresas"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Empresa",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response="204", description="Empresa deletada com sucesso"),
     * )
     */
    public function destroy(int $id)
    {
        Empresa::destroy($id);
        return Response::json('Empresa deletada', 204);
    }
}
