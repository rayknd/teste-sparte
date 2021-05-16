<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelObra extends Model
{
    protected $table ='obras';

    protected $fillable = ['titulo', 'nome_artista', 'altura', 'largura','profundidade','preco'];
}
