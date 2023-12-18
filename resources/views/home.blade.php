
<!DOCTYPE html>
<html  dir="ltr" lang="es" xml:lang="es">
<head>
    
  
    <style>
    .slideshow-container {
      position: relative;
      max-width: 800px;
      margin: auto;
    }
    .mySlides {
      display: none;
      text-align: center;
    }
    .mySlides img {
      display: block;
      width: 100%; 
      height: auto; 
    }
    .top-text {
      position: absolute;
      top: 10px;
      left: 50%;
      transform: translateX(-50%);
      color: white;
      font-size: 20px;
      font-weight: bold;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    .slide-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 24px;
      font-weight: bold;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    .bottom-text {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
      color: white;
      font-size: 20px;
      font-weight: bold;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    .prev, .next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: #333;
      color: white;
      padding: 10px 15px;
      border: none;
      cursor: pointer;
      font-size: 16px;
    }
    .prev {
      left: 10px;
    }
    .next {
      right: 10px;
    }
  </style>

@extends('layouts.app')

@section('content')
<div class="slideshow-container">
  <div class="mySlides">
    <img src="https://hotel-abcentral-mexico-city.booked.mx/data/Photos/r1366x443/7866/786683/786683877/Hotel-Abcentral-Mexico-City-Exterior.JPEG"  style="width:100%;">
    <div class="top-text">Cerro Colorado</div>
    <div class="slide-text">Con un 25% de descuento</div>
    <div class="bottom-text">Av.54 - Ciudad Munciipal</div>
  </div>
  <div class="mySlides">
    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/77/c5/b4/hotel-hd.jpg?w=700&h=-1&s=1" style="width:100%;">
    <div class="top-text">Socabaya</div>
    <div class="slide-text">Con un 20% de descuento</div>
    <div class="bottom-text">Calle Salteña - Zarate</div>
  </div>
  <div class="mySlides">
    <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aGFiaXRhY2klQzMlQjNuJTIwZGUlMjBob3RlbHxlbnwwfHwwfHx8MA%3D%3D" style="width:100%;">
    <div class="top-text">Cono Norte</div>
    <div class="slide-text">Con un 15% de descuento</div>
    <div class="bottom-text">Calle Moron - Apipa</div>
  </div>
  <div class="mySlides">
    <img src="https://w0.peakpx.com/wallpaper/936/273/HD-wallpaper-grand-azur-hotel-room-architecture-hotels-rooms-hurghada-grand-azur-hotel-egypt.jpg" style="width:100%;">
    <div class="top-text">Cayma</div>
    <div class="slide-text">Con un 10% de descuento</div>
    <div class="bottom-text">Calle Centenario - Tomilla</div>
  </div>

  <button class="prev" onclick="plusSlides(-1)">Anterior</button>
  <button class="next" onclick="plusSlides(1)">Siguiente</button>
</div>

<script>
  let slideIndex = 1;
  showSlides(slideIndex);
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {
      slideIndex = 1;
    }
    if (n < 1) {
      slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
  }
</script>

<div class="hero">
        <div class="text-container">
        <div style="text-align: center; background-color: #B2A095; color: white; font-family: Arial, sans-serif; margin: 0;">
            <h1 style="display: block; margin: 0 auto;">Hoteles Disponibles para Hoy</h1>
            <h3 style="display: block; margin: 0 auto;">Consigue el Mejor Precio en la Ciudad Blanca-Arequipa</h3>
            <div class="slideshow-container">
                <img class="mySlideLeft" src="https://media.istockphoto.com/id/1161270231/es/foto/vista-a%C3%A9rea-de-arequipa-per%C3%BA.jpg?s=612x612&w=0&k=20&c=XJ_s8vItAX1jyDbBlhbUDy7exaHwpVDZPdmLa3tCATY=" alt="Imagen 1">
                <img class="mySlideCenter" src="https://media.istockphoto.com/id/1008277764/es/foto/plaza-principal-de-la-ciudad-de-arequipa-y-catedral-palma-y-personas-relajarse-y-caminar.jpg?s=612x612&w=0&k=20&c=GrP23QOLocn_GNiK_Q_sOvzcsjFdBSfdEqFibj32IQg=" alt="Imagen 2">
                <img class="mySlideRight" src="https://media.istockphoto.com/id/530929056/es/foto/misti-volc%C3%A1n.jpg?s=612x612&w=0&k=20&c=WX0bmgJUGx4ttHOMlr59YlfXNLcdK5l9AQSjBE1BBb8=" alt="Imagen 3">
            </div>
            <h3 style="display: block; margin: 0 auto; color:black">Disponibilidad de 8am - 5pm</h3> 
            <style>
              .slideshow-container {
                  display: flex;
                  justify-content: space-between; 
                  align-items: center; 
              }

              .mySlideLeft,
              .mySlideCenter,
              .mySlideRight {
                  width: 30%; 
                  max-width: 30%; 
                  height: auto; 
              }
            </style>
      <div style="display: flex; justify-content: space-between;">
        <h4>Fecha actual: {{ \Carbon\Carbon::now()->format('d-m-Y') }}</h4>
                            <h4 id="hora">Hora actual: {{ \Carbon\Carbon::now()->toTimeString() }}</h4>
            </div> 
      </div>
<script>
    function actualizarHora() {
        const horaActualElement = document.getElementById('hora');
        const ahora = new Date();
        const horas = ahora.getHours();
        const minutos = ahora.getMinutes();
        const segundos = ahora.getSeconds();

        const horaFormateada = `${horas.toString().padStart(2, '0')}:${minutos.toString().padStart(2, '0')}:${segundos.toString().padStart(2, '0')}`;
        
        horaActualElement.innerText = `Hora actual: ${horaFormateada}`;
    }

    setInterval(actualizarHora, 1000);
</script>

<h3 style="text-align: center; color: black;">Disponibilidad de 8am a 5pm</h3>

<div class="container">
    <div class="row row-cols-3">
        @foreach($fotos as $foto)
        <div class="col">
            <div class="card">
                <img height="300" src="/foto/{{$foto->ruta}}" alt="Imagen">
                <div class="card-body">
                <div class="card-body">
                
                <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#infoCollapse{{$foto->id}}" aria-expanded="false" aria-controls="infoCollapse{{$foto->id}}" style="background-color: black; color: white;">
                Información
                    <div class="collapse" id="infoCollapse{{$foto->id}}">
                        <p><strong>Hotel:</strong> {{$foto->hotel}}</p>
                        <p><strong>Descripción:</strong>{{$foto->descripcion}}</p>
                        <p><strong>Provincia:</strong> {{$foto->provincia}}</p>
                        <p><strong>Distrito:</strong> {{$foto->distrito}}</p>
                        <p><strong>Dirección:</strong> {{$foto->direccion}}</p>
                        <p><strong>Habitaciones Disponibles:</strong> {{$foto->cuartos_disponibles}}</p>
                        <p><strong>Tipo de Habitación:</strong> {{$foto->tipo_habitacion}}</p>
                        <p><strong>Precio por Noche:</strong> {{$foto->precio_noche}}</p>
                        <p><strong>Precio por Semana:</strong> {{$foto->precio_semana}}</p>
                        <p><strong>Precio por Mes:</strong> {{$foto->precio_mes}}</p>
                        <p><strong>Reserva:</strong> {{$foto->reserva}}</p>
                    </div>
                </div>
                
  

                <form id="reservaForm">
    <label for="dia">Día:</label>
    <input type="text" id="dia" name="dia"><br><br>
    
    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha"><br><br>

    <label for="tipoHabitacion">Tipo de Habitación:</label>
    <select id="tipoHabitacion" name="tipoHabitacion">
        <option value="individual">Individual</option>
        <option value="doble">Doble</option>
        <option value="suite">Suite</option>
    </select><br><br>

    <button id="reservarBtn" class="btn btn-primary">Reservar</button>

    <div id="pagoForm" style="display: none;">
        <h3>Pagar</h3>
        <label for="monto">Monto:</label>
        <input type="text" id="monto" name="monto" readonly><br><br>
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>
        
        <label for="tarjeta">Número de tarjeta:</label>
        <input type="text" id="tarjeta" name="tarjeta"><br><br>
    

    </div>
    

</form>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$foto->id}}" aria-expanded="false" aria-controls="collapse{{$foto->id}}">
                            <i class="bi bi-chat text-primary"></i>
                            {{count($foto->comentario)}}
                        </button>
                        <small class="text-muted">{{$foto->User->name}}</small>
                    </div>
                    <div class="collapse" id="collapse{{$foto->id}}">
    @foreach($foto->comentario as $comentario)
        <div class="card card-body">
            {{ $comentario->comentario }}
            <small class="text-muted">{{ $comentario->User->name }}</small>
            
            @if(auth()->check() && $comentario->User->id === auth()->id())
                <form method="POST" action="{{ route('eliminarComentario') }}">
                    @csrf
                    <input type="hidden" name="id_comentario" value="{{ $comentario->id }}">
                    <button type="submit" class="btn btn-danger">Eliminar Comentario</button>
                </form>
            @endif
            
            <form action="{{ route('comentario.like', ['id' => $comentario->id]) }}" method="POST">
                @csrf
                <button type="submit">
                    <i class="bi bi-heart"></i>
                    {{ $comentario->likes }} 
                </button>
            </form>
                        </div>
                        @endforeach
                        <form method="POST" action="{{ route('subirComentario') }}">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-9">
                                        <input type="hidden" name="id_foto" value="{{$foto->id}}">
                                        <input type="text" class="form-control" name="comentario" placeholder="Ingrese su comentario">
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="bi bi-chat"></i>
                                        </button>
                                    </div>
                                    

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection