<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = "empresas";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'razao_social',
        'nome_fantasia',
        'cnpj',
        'endereco',
        'cidade',
        'estado',
        'pais',
        'telefone',
        'email',
        'cnae_principal'
    ];

    public function getCnae()
    {
        return $this->hasMany(EmpresaCnae::class, 'empresa_id');
    }

    public function getQsa()
    {
        return $this->hasMany(EmpresaQsa::class, 'empresa_id');
    }
}
