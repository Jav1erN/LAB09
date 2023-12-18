<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Foro de Opinión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=IM+Fell+English&display=swap">

    <style>
        body {
            text-align: center;
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        h1 {
            color: #FE2E64;
            font-family: 'IM Fell English', serif;
            font-size: 150px;
            font-weight: bold;
            margin-right: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            z-index: 2;
        }

        #formulario-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }

        #formulario {
            max-width: 400px;
            font-family: 'IM Fell English', serif;
            width: 70%;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            margin-right: 65px;
            z-index: 2;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 25px;
            color: #0AC4C5;
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

        .valor {
            display: inline-flex;
            flex-direction: row-reverse;
            align-items: center;
            gap: 10px;
        }

        .valor input {
            display: none;
        }

        .valor label {
            font-size: 40px;
            color: gray;
            cursor: pointer;
            text-align: center;
        }

        .valor label:hover,
        .valor input:checked~label,
        .valor label:hover+label {
            color: rebeccapurple;
        }

        button,
        .ver {
            background-color: #FE2E64;
            color: #ccc;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
            margin-top: 15px;
            font-weight: bold; 
        }

        button:hover {
            background-color: #0056b3;
        }
        .ver:hover{
            background-color: #0056b3;
        }

        .mensaje {
            color: #28a745;
            font-weight: bold;
            margin: 10px 0;
        }

        a {
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

    <div id="formulario-container">
        <h1>Foro de Comentarios</h1>
        <div id="formulario">

            <form method="POST" action="{{ route('opiniones.almacenar') }}">
                @csrf

                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Tu nombre" required>

                <label for="correo">Correo Electrónico:</label>
                <input type="email" name="correo" id="correo" placeholder="Tu email" required>

                <h3>Puntaje de Satisfacción</h3>
                <div class="valor">
                    <input type="radio" name="valor" id="str5" value="5" required><label for="str5">☆</label>
                    <input type="radio" name="valor" id="str4" value="4" required><label for="str4">☆</label>
                    <input type="radio" name="valor" id="str3" value="3" required><label for="str3">☆</label>
                    <input type="radio" name="valor" id="str2" value="2" required><label for="str2">☆</label>
                    <input type="radio" name="valor" id="str1" value="1" required><label for="str1">☆</label>
                </div>

                <textarea name="opinion" placeholder="Escribe tu opinión" required></textarea>

                <div class="botones">
                    <button type="submit" class="enviar">Enviar opinión</button>

                    @if (isset($mensaje))
                    <p class="mensaje">{{ $mensaje }}</p>
                    @endif
                </div>

            </form>
            <a style="font-size: 18px; text-decoration: none;" href="{{ route('opiniones') }}" class="ver">Ver opiniones</a>

        </div>

        <div id="imagen-container">
            <img id="imagen" src="https://th.bing.com/th/id/R.779f0b9829d7c7886fbb1ebe7cd70540?rik=jwDZOW%2f8JAmmNA&pid=ImgRaw&r=0" alt="Imagen de tu empresa">
        </div>
    </div>

</body>

</html>