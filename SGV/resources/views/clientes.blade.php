<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cliente.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<header>
  <div class="cabe"> 
  <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><img width="40" height="40" src="https://img.icons8.com/plasticine/100/menu.png" alt="menu"/></button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Menu</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <a href="/productos"><button class="btn btn-light"><img width="120" height="120" src="https://img.icons8.com/plasticine/100/package.png" alt="package"/><br>Productos</button></a>
  </div>
</div>
<h1><img width="48" height="48" src="https://img.icons8.com/color-glass/48/total-sales-1.png" alt="total-sales-1"/>SGV</h1>
</div>
  </header>
  <div class="nrw">
  <h3 class="font">
  <img width="64" height="64" src="https://img.icons8.com/dusk/64/crowd.png" alt="crowd"/>Clientes</h3>
   </div>
   <div class="coun">
    <div class="gjj">
    <button class="btn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><img width="48" height="48" src="https://img.icons8.com/pulsar-color/48/plus-math.png" alt="plus-math"/></button>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><img width="35" height="35" src="https://img.icons8.com/office/40/gender-neutral-user.png" alt="gender-neutral-user"/>Registrar Cliente</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('clientes.create')}}" method="POST">
        @csrf
      <div class="modal-body">
        <div class="div">
        <div class="sep">
        <label for="">Nombre:</label>
        <input class="form-control" type="text" placeholder="Victor" name="nombre">
        </div>
        <div class="sep">
        <label for="">Apellido:</label>
        <input class="form-control" type="text" placeholder="Cardona" name="apellido">
        </div>
        <div class="sep">
        <label for="">Cedula:</label>
        <input class="form-control" type="text" placeholder="30700323" name="cedula">
        </div>
        </div>
        <div class="div">
        <div class="sep">
        <label for="">telefono:</label>
        <input class="form-control" type="text" placeholder="04125043885" name="telefono">
        </div>
        <div class="sep">
        <label for="">Email:</label>
        <input class="form-control" type="email" placeholder="nose@gmail.com" name="email">
        </div>
        <div class="sep">
        <label for="">Dirección:</label>
        <input class="form-control" type="text" placeholder="lidice" name="direccion">
        </div>
        </div>
        <div class="sep">
        <label for="">Sexo:</label>
        <select class="form-select" name="sexo" >
        <option selected>seleccione un opcion</option>
            <option value="1">Hombre</option>
            <option value="2">Mujer</option>

       </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">añadir</button>
      </div>
      </form>
    </div>
  </div>
</div>
    <table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cedula</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Dirección</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $cliente as $item )
           <tr>
           <td>{{$item->id_clientes}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->apellido}}</td>
            <td>{{$item->cedula}}</td>
            <td>{{$item->telefono}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->dirección}}</td>
            </tr>            
        @endforeach
    </tbody>
   </table>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>