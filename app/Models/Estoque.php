<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $fillable = [
        'livro_id',
        'tipo',
        'quantidade',
        'responsavel',
    ];

    public function livro()
    {
        return $this->belongsTo(Livro::class, 'livro_id');
    }

}
