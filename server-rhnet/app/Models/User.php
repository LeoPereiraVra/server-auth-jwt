<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuario';

    protected $authPasswordName = 'senha';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'pessoa_id',
        'empresa_id',
        'login',
        'senha',
        'validadeSenha',
        'tipo',
        'login_unificado',
        'hash_acesso',
        'redefine_senha',
        'total_acesso',
        'data_nao_exibe_mensagem_contrata_app',
        'log_data_cadastro',
        'log_data_ultimo_acesso',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'senha',
        'hash_acesso',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'log_data_cadastro' => 'datetime',
            'log_data_ultimo_acesso' => 'datetime',
            // 'senha' => 'hashed',
        ];
    }
}
