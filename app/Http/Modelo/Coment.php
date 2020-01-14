<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Comment;
class Coment extends Model
{

    protected $table = 'coments';

    // fields can be filled
    protected $fillable = ['body', 'post_id'];

    public function post()
    {
        return $this->belongsTo('App\Articulo');
    }

}
