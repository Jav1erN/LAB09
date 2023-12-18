<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client;
use Illuminate\Support\Facades\View;

class AvisoController extends Controller
{
    public function RecuperarCliente()
    {
        return view('aviso.avisos');
    }
    public function RegistroCliente()
    {
        return view('aviso.registro');
    }

    public function mostrar()
    {
        return view('aviso.prueba');
    }

    public function IngresarCliente(Request $request)
    {
        try {
            $data = $request->validate([
                'nombre' => 'required|string',
                'apellido' => 'required|string',
                'numero' => 'required|integer',
                'dni' => 'required|integer',
            ]);

            $aviso = [
                'nombre' => $data['nombre'],
                'apellido' => $data['apellido'],
                'numero' => $data['numero'],
                'dni' => $data['dni'],
            ];

            $mongo = new Client();
            $db = $mongo->selectDatabase('Minerva');
            $collection = $db->selectCollection('avisos');
            $result = $collection->insertOne($aviso);

            return view('aviso.registro')->with('mensaje', 'Cliente registrado!');
        } catch (\Exception $e) {
            return view('aviso.registro')->with('mensaje', 'Error al registrar el cliente: ' . $e->getMessage());
        }
    }

    public function BuscarCliente(Request $request)
    {
        $buscardni = $request->input('buscardni');
        $cliente = (new Client())->Minerva->avisos->findOne(['dni' => $buscardni]);

        if ($cliente) {
            return view('aviso.prueba', compact('cliente'));
        } else {
            return view('aviso.prueba');
        }
    }

}


