<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      title="SISCNPJ",
 *      description="Sistema de Cadastro Nacional de Pessoas Jurídicas",
 *      version="0.1",
 *      @OA\Contact(
 *          name="WallaceWebs",
 *          url="https://wallacewebs.com",
 *          email="dev@wallacewebs.com"
 *      ),
 *      @OA\License(
 *         name="MIT",
 *         url="https://opensource.org/licenses/MIT"
 *     )
 * )
 *
 * @OA\Tag(
 *     name="Empresas",
 *     description="Operações relacionadas a empresas"
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
