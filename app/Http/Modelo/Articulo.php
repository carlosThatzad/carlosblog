<?php

namespace carlosblog;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';
    protected $fillable= [
        'titulo','descripcion','contenido','imagen','user_id','categoria_id','slug'

    ];
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}
