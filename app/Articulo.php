<?php

namespace carlosblog;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Comment;

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

    public function coments()
    {
        return $this->hasMany(Coment::class, 'post_id');
    }
}
