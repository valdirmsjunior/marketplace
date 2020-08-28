<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    protected $fillable = [
        'nome', 'descricao', 'telefone', 'celular', 'slug'
    ];


    public function loja()
    {
        return $this->belongsTo(Loja::class);
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }
}
