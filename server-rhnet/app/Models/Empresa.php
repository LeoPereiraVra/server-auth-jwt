<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    
    protected $connection = 'rhnet';

    protected $table = 'empresa';

    protected $fillable = [
        'clienteId',
        'empresaId',
        'cadastroAtivo',
        'senha',
        'controle',
        'nome',
        'cnpj',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidadeId',
        'cep',
        'telefone',
        'especie',
        'email',
        'diaFechamentoMes',
    ];

}
