<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Contactanos</title>
    <style>
        body {
            text-align: center;
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        header {
            background-color: #007bff;
            color: #ffffff;
            padding: 20px;
            position: relative;
            z-index: 2;
        }

        h1 {
            margin: 0;
        }

        #formulario-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
            z-index: 1;
        }

        #formulario {
            max-width: 600px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 2;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            text-align: right;
            margin-right: 10px;
            flex-grow: 1;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button,
        .ver {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .mensaje {
            color: #28a745;
            font-weight: bold;
            margin: 10px 0;
        }

        a {
            text-decoration: none;
            color: #ffffff;
            margin-top: 10px;
            display: inline-block;
            font-size: 14px;
        }

        a:hover {
            text-decoration: underline;
        }

        #imagen-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        #imagen {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(50%);
            
        }
    </style>
</head>

<body>

    <header>
        <h1>Imperium</h1>
    </header>

    <div id="formulario-container">
        <div id="formulario">

            <form method="POST" action="{{ route('cliente.crear') }}">
                @csrf

                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Tu nombre" required>

                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" placeholder="Tu apellido" required>

                <label for="numero">Numero Celular:</label>
                <input type="text" name="numero" id="numero" placeholder="Tu numero" required>

                <label for="dni">DNI:</label>
                <input type="text" name="dni" id="dni" placeholder="Tu dni" required>

                <button type="submit" class="enviar">Enviar</button>

                @if (session('mensaje'))
                <p class="mensaje">{{ session('mensaje') }}</p>
                @endif

            </form>
            <a href="{{ route('cliente.buscar') }}" class="ver">Buscar cliente</a>
            
            

        </div>

        <div id="imagen-container">
            <img id="imagen" src="https://th.bing.com/th/id/R.a95075f3d50f845c23805239c320a2c6?rik=Wgv63ZSRemACug&pid=ImgRaw&r=0" alt="Imagen de tu empresa">
        </div>
    </div>

    

</body>

</html>