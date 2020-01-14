<?php

namespace carlosblog\Http\Controllers;

use carlosblog\Articulo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articulos = Articulo::orderBy('created_at', 'DESC')->paginate(10);

        return view('admin.home')
            ->with('articulos', $articulos);

    }
}
