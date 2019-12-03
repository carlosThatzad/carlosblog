<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 3/12/19
 * Time: 12:27
 */

namespace carlosblog\Http\Controllers;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function show(){


        return view('admin');

    }
}