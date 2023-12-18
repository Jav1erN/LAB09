<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client;
use MongoDB\BSON\ObjectId;



class OpinionController extends Controller
{
    public function mostrarForo()
    {
        return view('opiniones.foro');
    }

    public function formCrear()
    {
        return view('opiniones.crear');
    }

    public function crearOpinion(Request $request)
    {

        $data = $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'opinion' => 'required|string',
            'valor' => 'required|integer|between:1,5',
        ]);


        $opinion = [
            'nombre' => $data['nombre'],
            'correo' => $data['correo'],
            'opinion' => $data['opinion'],
            'valor' => $data['valor'],

        ];

        $mongo = new Client();
        $db = $mongo->selectDatabase('Minerva');
        $collection = $db->selectCollection('opiniones5');
        $result = $collection->insertOne($opinion);

        return redirect('/opiniones/Mopiniones')->with('mensaje', 'Opinión creada!');
    }

    public function mostrarOpiniones()
    {
        $mongo = new Client();
        $db = $mongo->selectDatabase('Minerva');
        $collection = $db->selectCollection('opiniones5');

        $opiniones = $collection->find()->toArray();

        return view('opiniones.Mopiniones')->with('data', compact('opiniones'));
    }


    public function eliminarOpinion($id)
    {
        $mongo = new Client();
        $db = $mongo->selectDatabase('Minerva');
        $collection = $db->selectCollection('opiniones5');

        $filtro = ['_id' => new ObjectId($id)];

        try {
            $resultado = $collection->deleteOne($filtro);

            if ($resultado->getDeletedCount() > 0) {
                $mensaje = 'Opinión eliminada correctamente.';
            } else {
                $mensaje = 'No se encontró ninguna opinión para eliminar.';
            }

            return redirect()->route('opiniones')->with('correcto', $mensaje);
        } catch (\Exception $e) {
            $mensaje = 'Error al eliminar la opinión. Detalles: ' . $e->getMessage();
            return redirect()->route('opiniones')->with('error', $mensaje);
        }
    }


    public function actualizarOpinion(Request $request, $id)
    {
        $mongo = new Client();
        $db = $mongo->selectDatabase('Minerva');
        $collection = $db->selectCollection('opiniones5');

        $filtro = ['_id' => new ObjectId($id)];

        
        $nuevoComentario = $request->input('nuevoComentario');

        try {
            $resultado = $collection->updateOne($filtro, ['$set' => ['opinion' => $nuevoComentario]]);

            if ($resultado->getModifiedCount() > 0) {
                $mensaje = 'Opinión actualizada correctamente.';
            } else {
                $mensaje = 'No se encontró ninguna opinión para actualizar.';
            }

            return redirect()->route('opiniones')->with('correctoA', $mensaje);
        } catch (\Exception $e) {
            $mensaje = 'Error al actualizar la opinión. Detalles: ' . $e->getMessage();
            return redirect()->route('opiniones')->with('error', $mensaje);
        }
    }
}
