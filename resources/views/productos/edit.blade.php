 @extends('layouts.productos')   
@section('content')
    <div class="w-form">
      <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        <!--campo de protección de formulario-->
            {{ csrf_field() }}
            {{ method_field('PUT') }}
        <label for="name" class="creationlabel">Nombre del producto</label>
        <input type="text" class="creationinput w-input" maxlength="256" name="name" data-name="name" placeholder="Nombre del producto" required="" value="{{ $producto->name }}">

        <label for="quantity" class="creationlabel">Cantidad</label>
        <input type="number" name="quantity" class="creationinput w-input" value="{{ $producto->quantity }}">

        <label for="price" class="creationlabel">Precio</label>
        <input type="number" name="price" class="creationinput w-input" placeholder="$" value="{{ $producto->price }}">

        <label for="model" class="creationlabel">Modelo</label>
        <input type="text" class="creationinput w-input" maxlength="256" name="model" data-name="model" placeholder="Modelo del producto" value="{{ $producto->model }}"> 

        <label for="description" class="creationlabel">Descripción del producto</label>
        <textarea placeholder="¿Para qué sirve?..." maxlength="2500" id="description" name="description" required="" data-name="description" class="creationinput w-input">{{ $producto->description }}</textarea>

        <input type="submit" value="Publicar" data-wait="ESPERE..." class="button w-button">
      </form>
      <div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
      </div>
      <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form.</div>
      </div>
    </div>
  </div>
  @endsection