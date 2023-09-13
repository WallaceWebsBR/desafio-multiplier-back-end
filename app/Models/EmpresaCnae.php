<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaCnae extends Model
{
    use HasFactory;

    protected $table = "empresa_cnae";

    protected $fillable = [
        'empresa_id',
        'cnae',
        'descricao'
    ];
}
