<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    /**
     * Muestra la página de error 404.
     *
     * @return \Illuminate\View\View
     */
    public function notFound()
    {
        return view('errors.404');
    }
}
