<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'autor',
        'data_publicacao',
        'preco',
        'image',
        'editora_id',
    ];

    public function editora()
    {
        return $this->belongsTo(Editora::class, 'editora_id');
    }
}
