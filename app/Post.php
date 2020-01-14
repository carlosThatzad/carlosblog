<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 10/01/20
 * Time: 13:41
 */

namespace carlosblog;


class Post
{

    public function comments()
    {
        return $this->hasMany('App\Coment');
    }
}