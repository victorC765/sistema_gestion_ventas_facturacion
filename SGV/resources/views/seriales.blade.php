<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/seriales.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <a href="/productos"><button class="btn"><img width="64" height="64" src="https://img.icons8.com/dusk/64/circled-chevron-left.png" alt="circled-chevron-left"/></button></a>
    <div class="ca">
 <h1 class="jj"><img width="100" height="100" src="https://img.icons8.com/bubbles/100/product.png" alt="product"/>Número de Productos</h1>
 </div>
 <div class="coun">
 <div class="ca">
 <h4>{{$producto}}</h4>
 <h4>{{$xq}}</h4>
 <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><img width="50" height="50" src="https://img.icons8.com/cotton/64/add--v2.png" alt="add--v2"/></button>
</div>
 <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrar de Serial</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('productos.añadirSerial')}}" method="POST">
        @csrf
      <div class="modal-body">
        <input type="hidden" value="{{$identificador}}" name="idproduc">
        <label for="">serial:</label>
       <input type="text" class="form-control" name="serial">
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="submit">añadir</button>
      </div>
    </form>
    </div>
  </div>
</div>


 <table class="table">
<thead>
    <tr>
    <th>#</th>
    <th>serial</th>
</tr>
</thead>
    <tbody>
 @foreach ($ser as $item )
 <tr>
    <td>{{$item->id_serial}}</td>
 <td>{{$item->serial}}</td>
 </tr>
 @endforeach
 </tbody>
 </table>
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>