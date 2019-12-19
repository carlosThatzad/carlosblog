<?php

namespace carlosblog;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
   protected  $fillable = [
       'name'
   ];
    public function categorias()
    {
        return $this->hasMany(Articulo::class, 'categoria_id', 'id');
    }
}
