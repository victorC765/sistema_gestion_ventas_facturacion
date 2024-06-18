<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <header>
  <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><img width="40" height="40" src="https://img.icons8.com/plasticine/100/menu.png" alt="menu"/></button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Menu</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <a href="/clientes"><button class="btn btn-light"><img width="100" height="100" src="https://img.icons8.com/stickers/100/user-skin-type-2.png" alt="user-skin-type-2"/><br>cliente</button></a>
  </div>
</div>
  </header>
  <div class="grup">
    <a href="./">
    <h1 class="jj"><img width="100" height="100" src="https://img.icons8.com/bubbles/100/product.png" alt="product"/>Inventario</h1>
    </a>
    <div class="coun">
    <div class="lad">
    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <img width="60" height="60" src="https://img.icons8.com/fluency/48/add--v1.png" alt="add--v1"/>
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
   
    <div class="modal-content">
      <div class="lk">
      <form action="{{ route('productos.create') }}" method="POST">
        @csrf
      <div class="modal-header xq">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="" class="form-label">Producto:</label>
      <input class="form-control" type="text" name="produc" placeholder="producto*" aria-label="default input example">
      </div>
      <div class="mb-3">
      <label for="" class="form-label">Descripción:</label>
      <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" name="descr" id="floatingTextarea"></textarea>
  
  <label for="floatingTextarea">Comments</label>
</div>
</div>
<div class="mb-3">
          <label for="" class="form-label">Precio:</label>
      <input class="form-control" type="number" placeholder="40$" name="prec" aria-label="default input example">
      </div>
      <div class="mb-3">
          <label for="" class="form-label">Marca:</label>
      <input class="form-control" type="text" placeholder="juana" name="mar" aria-label="default input example">
      </div>
   
   
    </div>
      <div class="modal-footer xq">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Añadir</button>
      </div>
</form>
</div>
    </div>
  </div>
</div>
    
    <table class="table table-hover">
  <thead>
    <tr class="table-success">
      <th scope="col">#</th>
      <th scope="col">Productos</th>
      <th scope="col">Descripción</th>
      <th scope="col">Precio</th>
      <th scope="col">Marca</th>
      <th scope="col">Seriales</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($produc as $item)
    <tr>
      <td>{{$item->id_productos}}</td>
    <td>{{$item->productos}}</td>
    <td>{{$item->descripcion}}</td>
    <td>{{$item->precio}}$</td>
    <td>{{$item->marca}}</td>
    <td>
      <form action="{{route('productos.xd')}}" method="get">
      @csrf
     <input type="hidden" value="{{$item->id_productos}}" name="idproduc">
     <input type="hidden" value="{{$item->id_productos}}" name="id">
     <input type="hidden" value="{{$item->productos}}" name="produc">
      <button class="btn btn-info" type="submit"><img width="50" height="50" src="https://img.icons8.com/papercut/60/visible.png" alt="visible"/></button>
     </form>
    </td>
    <td>
      <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#EditarModal{{$item->id_productos}}"><img width="50" height="50" src="https://img.icons8.com/avantgarde/100/edit.png" alt="edit"/></button>
      <div class="modal fade" id="EditarModal{{$item->id_productos}}" tabindex="-1" aria-labelledby="EditarModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
   
    <div class="modal-content">
      <form action="{{ route('productos.update') }}" method="POST">
        @csrf
      <div class="modal-header xq">
        <h1 class="modal-title fs-5" id="EditarModalLabel">Editar Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
          <input type="hidden" value="{{$item->id_productos}}" name="id">
        </div>
        <div class="mb-3"> 
          <label for="" class="form-label">Producto:</label>
      <input class="form-control" type="text" name="produc" value="{{$item->productos}}" placeholder="producto*" aria-label="default input example">
      </div>
      <div class="mb-3">
      <label for="" class="form-label">Descripción:</label>
      <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" name="descr" value="{{$item->descripcion}}" id="floatingTextarea"></textarea>
  
  <label for="floatingTextarea">Comments</label>
</div>
</div>
<div class="mb-3">
          <label for="" class="form-label">Precio:</label>
      <input class="form-control" type="number" placeholder="40$" value="{{$item->precio}}" name="prec" aria-label="default input example">
      </div>
      <div class="mb-3">
          <label for="" class="form-label">Marca:</label>
      <input class="form-control" type="text" placeholder="juana" name="mar" aria-label="default input example">
      </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guartdar Cambios</button>
      </div>
</form>
    </div>
  </div>
</div>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>