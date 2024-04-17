<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'user_id',
        'nome',
        'cc',
        'morada',
        'codigoPostal',
        'localidade',
        'email',
        'telefone',

    ];

    public function user ()
    {
        return $this->belongsTo(User::class);
        // este socio pertence à tabela User, ligando-se através da chave estrangeira
    }
}
