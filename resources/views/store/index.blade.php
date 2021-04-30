@extends('layouts.fronts')

@section('content')

<div class="w-dyn-list">
      <div role="list" class="blog-list w-dyn-items">
        @foreach ($productos as $producto)
        <div role="listitem" class="w-dyn-item">
          <div class="cardcontainer">
            <a href="{{ route('productos.show', $producto->id) }}" class="blogcard w-inline-block">
              <img src="{{ asset('p_images/' . $producto->image_p) }}" loading="lazy" alt="" class="blogimage">
              <div class="bloginfocard">
                <h4 class="blogcardheader">{{ $producto->name }}</h4>
              </div>
            </a>
            @guest
                @else
                <div class="cardbuttoncontainer">
              <a href="{{ route('productos.edit', $producto->id) }}" class="cardbutton _1 w-inline-block">
                <img src="images/draw.png" loading="lazy" width="20" alt="" class="cardbuttonimage"></a>
               <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }} 
              <button type="submit" class="cardbutton _2 w-inline-block btn-outline-danger" >
                <img src="images/delete.png" loading="lazy" width="20" alt="" class="cardbuttonimage"></a>
                </form> 
            </div>
            @endguest
          </div>
        </div>
        @endforeach
      </div>
    </div>
    {{ $productos->links() }}
    @guest
        @else
      <div class="addnewbutton">
      <a data-w-id="e5c33930-a9d6-c5f2-53ae-f8bf50989d46" href="{{ route('productos.create') }}" class="blogcard newpost w-inline-block">
        <div class="bloginfocard newpost">
          <div data-w-id="875cdc08-dfa6-61ba-aa8c-fa520186febf" data-animation-type="lottie" data-src="documents/add-post.json" data-loop="0" data-direction="1" data-autoplay="0" data-is-ix2-target="1" data-renderer="svg" data-default-duration="3" data-duration="0" data-ix2-initial-state="0"></div>
          <h4 class="blogcardheader">Nuevo producto</h4>
        </div>
      </a>
    </div>
    @endguest

@endsection