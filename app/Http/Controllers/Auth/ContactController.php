<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 18/11/19
 * Time: 11:26
 */

namespace carlosblog\Http\Controllers\Auth;


use carlosblog\Http\Controllers\Controller;

class ContactController extends Controller
{
public function contact(){
    return view('contacto');
}
}