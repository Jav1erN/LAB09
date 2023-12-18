<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Opiniones</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&display=swap">


  <style>
    
    .actualizar-form label {
      color: #155724;  
  }
    .opiniones {
      margin: 20px;
    }

    .opiniones h2 {
    color: #e74c3c; 
    font-family: 'Roboto', sans-serif; 
    font-size: 32px; 
    font-weight: bold; 
    margin: 20px 0;
    text-transform: uppercase; 
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); 
    letter-spacing: 2px; 
    padding-bottom: 5px;
  }

    .opiniones-list {
      list-style: none;
      padding: 0;
    }

    .opinion-item {
      border: 1px solid #ccc;
      margin: 10px 0;
      padding: 10px;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    .opinion-header {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    .nombre {
      color: blue;
      font-size: 20px;
    }

    .valor {
      color: red;
      font-size: 12px;
    }

    .correo {
      color: red;
      font-size: 14px;
    }

    .stars i {
      font-size: 18px;
      color: red;
    }

    .opinion-content {
      margin-top: 10px;
    }

    .opinion {
      color: black;
      font-size: 14px;
    }

    .opiniones-calificacion {
      display: flex;
      align-items: center;
      margin-top: 10px;
    }

    .estrellas {
      margin-right: 5px;
    }

    .calificacion {
      font-weight: bold;
    }

    .botones2 {
      display: flex;
      justify-content: flex-end;
      margin-top: 10px;
      width: 100%;
    }

    .botones2 a,
    .actualizar-boton,
    .borrar {
      background-color: #007bff;
      color: #ffffff;
      border: none;
      padding: 8px 12px;
      font-size: 12px;
      cursor: pointer;
      border-radius: 4px;
      transition: background-color 0.3s;
      text-decoration: none;
      margin-left: 5px;
    }

    .botones2 a i,
    .actualizar-boton i,
    .borrar i {
      margin-right: 5px;
    }

    .botones2 a:hover,
    .actualizar-boton:hover,
    .borrar:hover {
      background-color: red;
    }

    .correcto {
      background-color: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
      position: fixed;
      bottom: 0;
      right: 0;
      margin: 10px;
      z-index: 1000;
    }

    .inicio {
      background-color: orangered;
      color: blanchedalmond;
      padding: 10px 20px;
      font-size: 16px;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s;
    }

    .inicio i {
      margin-right: 5px;
    }
    .actualizar-form {
      margin-bottom: 10px; 
    }
    

  .actualizar-form textarea {
    box-sizing: border-box; 
    margin-bottom: -7px; 
  }
  </style>
</head>

<body>
  <div class="opiniones">
    <h2>Opiniones</h2>
    <a href="{{ route('opiniones.foro') }}" class="inicio"><i class="fas fa-home"></i> Inicio</a>
    <ul class="opiniones-list">
      @foreach ($data['opiniones'] as $opinion)
      <hr>
      <li class="opinion-item">
        <div class="opinion-header">
          <span class="nombre">{{ $opinion['nombre'] }}</span>
          <span class="correo">{{ $opinion['correo'] }}</span>
          <br>
          <div class="stars">
            @for ($i = 1; $i <= 5; $i++) @if ($i <=$opinion['valor']) <i class="fas fa-star"></i>
              @else
              <i class="far fa-star"></i>
              @endif
              @endfor
              <span class="valor">{{ $opinion['valor'] }}</span>
          </div>
        </div>
        <div class="opinion-content">
          <p class="opinion">{{ $opinion['opinion'] }}</p>
        </div>
        <div class="botones2">
          <form action="{{ route('opiniones.actualizar', ['id' => $opinion['_id']]) }}" method="post" class="actualizar-form">
            @csrf
            <label for="nuevoComentario">Nuevo Comentario:</label>
            <textarea style="width: 230px; height: 24px; " name="nuevoComentario" id="nuevoComentario" placeholder="Ingresa tu nuevo comentario" rows="4" cols="50" class="form-control"></textarea>
            <button style="font-weight: bold; font-size: 13px; font-family: 'Barlow Condensed', sans-serif;  " type="submit" class="actualizar-boton" onclick="return confirm('¿Estás seguro de que deseas actualizar esta opinión?')">
              <i class="fas fa-edit"></i> Actualizar
            </button>
            <a  style=" font-weight: bold; font-size: 13px; font-family: 'Barlow Condensed', sans-serif;  " href="{{ route('opiniones.eliminar', ['id' => $opinion['_id']]) }}" class="borrar" onclick="return confirm('¿Estás seguro de que deseas eliminar esta opinión?')">
              <i class="fas fa-trash"></i> Borrar
            </a>
          </form>
          @if(session('correctoA'))
          <div class="correcto">
            <i class="fas fa-check-circle"></i> {{ session('correctoA') }}
          </div>
          @endif

          @if(session('correcto'))
          <div class="correcto">
            <i class="fas fa-check-circle"></i> {{ session('correcto') }}
          </div>
          @endif


        </div>

      </li>
      @endforeach
    </ul>
  </div>
</body>

</html>