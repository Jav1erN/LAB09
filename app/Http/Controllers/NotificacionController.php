<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NotificacionController extends Controller
{
    public function notificarPromocion(Request $request)
    {
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $numero = $request->input('numero');
        $dni = $request->input('dni');

        $mensaje = "Usted usuario de nombre $nombre con apellido $apellido, número $numero y DNI $dni recibirá una promoción.";


        $apiToken = "6625046765:AAE2BU5dp0GjCtq1Hwp0A3kcqiLCb3rX2Q4";
        $chatId = "@Mensajephp";

        $data = [
            'chat_id' => $chatId,
            'text' => $mensaje,
        ];

        $response = Http::get("https://api.telegram.org/bot$apiToken/sendMessage", $data);

        return "Notificación enviada correctamente.";
        
    }
}
