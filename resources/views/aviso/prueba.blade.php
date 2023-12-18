<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado de la búsqueda</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f4f4f4;
            color: #f4f4f4;
            z-index: 2;
        }

        h1 {
            color: #e8491d;
            margin-top: 20px;
            z-index: 2;
        }

        p {
            font-size: 18px;
            margin-bottom: 10px;
            z-index: 2;
        }

        form {
            margin-top: 20px;
            text-align: center;
            z-index: 2;
        }

        button {
            padding: 12px 20px;
            font-size: 18px;
            background-color: #e8491d;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            z-index: 2;
        }

        button:hover {
            background-color: #d43c1a;
            
        }
        #imagen-container {
      width: 100%;
      height: 100vh;
      overflow: hidden;
      position: absolute;
      top: 0;
      left: 0;
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

    <h1>Resultado de la búsqueda</h1>

    @if(isset($cliente))
        <p>Nombre: {{ $cliente['nombre'] }}</p>
        <p>Apellido: {{ $cliente['apellido'] }}</p>
        <p>Número: {{ $cliente['numero'] }}</p>
        <p>DNI: {{ $cliente['dni'] }}</p>
    @else
        <p>Cliente no encontrado</p>
    @endif

    <form method="get" action="{{ route('cliente.notificar') }}">
        @csrf
        <input type="hidden" name="nombre" value="{{ $cliente['nombre'] }}">
        <input type="hidden" name="apellido" value="{{ $cliente['apellido'] }}">
        <input type="hidden" name="numero" value="{{ $cliente['numero'] }}">
        <input type="hidden" name="dni" value="{{ $cliente['dni'] }}">
        <button type="submit" class="ver">Enviar promoción</button>
    </form>

    <div id="imagen-container">
    <img id="imagen"
      src="https://th.bing.com/th/id/R.779f0b9829d7c7886fbb1ebe7cd70540?rik=jwDZOW%2f8JAmmNA&pid=ImgRaw&r=0"
      alt="Imagen de tu empresa">
  </div>
</body>

</html>