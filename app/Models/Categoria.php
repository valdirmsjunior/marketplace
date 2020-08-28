<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'slug'
    ];

    public function produtos()
    {
        return $this->belongsToMany(Produto::class);
    }
}
