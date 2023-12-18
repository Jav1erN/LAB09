<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;

class TerminosController extends Controller
{
    public function metodo()
    {
        // Tu lógica aquí
        return view('terminos'); // Esto renderizará la vista terminos.blade.php
    }
}
