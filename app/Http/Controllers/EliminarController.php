<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EliminarController extends Controller
{
    public function confirmarEliminacion()
    {
        return view('confirmar_eliminacion');
    }

    public function eliminarPerfil()
    {
        Auth::user()->delete();
        Auth::logout();
        return redirect()->route('home');
    }
}
