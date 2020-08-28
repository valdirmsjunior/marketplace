<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{

    protected $fillable = [
        'nome', 'descricao', 'conteudo','preco', 'slug'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
