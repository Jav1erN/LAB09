<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de Avisos</title>
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
      color: #333;
      overflow: hidden; 
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

    h1 {
      color: #e8491d;
      position: relative;
      z-index: 2; 
    }

    form {
      margin-bottom: 350px;
      text-align: center;
      position: relative; 
      z-index: 2; 
    }

    label {
      font-size: 18px;
      margin-right: 10px;
      color: #e8491d;
    }

    input[type="text"] {
      padding: 10px;
      font-size: 16px;
      border: 2px solid #e8491d;
      border-radius: 5px;
    }

    button {
      padding: 12px 20px;
      font-size: 18px;
      background-color: #e8491d;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #d43c1a;
    }

    #resultados {
      margin-top: 20px;
      z-index: 2; 
    }
  </style>
</head>

<body>

  <div id="imagen-container">
    <img id="imagen"
      src="https://th.bing.com/th/id/R.779f0b9829d7c7886fbb1ebe7cd70540?rik=jwDZOW%2f8JAmmNA&pid=ImgRaw&r=0"
      alt="Imagen de tu empresa">
  </div>

  <h1>Listado de Avisos</h1>

  <form method="POST" action="{{ route('cliente.encontrar') }}">
    @csrf
    <label for="buscardni">Buscar por DNI:</label>
    <input type="text" name="buscardni" id="buscardni" placeholder="Ingrese el DNI">
    <button type="submit">Buscar</button>
  </form>


</body>

</html>