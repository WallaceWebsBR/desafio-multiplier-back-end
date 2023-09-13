<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaQsa extends Model
{
    use HasFactory;

    protected $table = "empresa_qsa";

    protected $fillable = [
        'empresa_id',
        'nome',
        'cpf',
        'qual'
    ];
}
