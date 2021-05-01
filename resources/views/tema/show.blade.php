@extends('layouts.front')

@section('content')


    <h2 class="titulo-section">{{ $tema->name }}</h2>

    <!--PUBLICACIONES -->

    <div class="w-dyn-list">
      <div role="list" class="blog-list w-dyn-items">
        @foreach ($tema->blogs as $blog)
        <div role="listitem" class="w-dyn-item">
          <div class="cardcontainer">
            <a href="{{ route('blog.show', $blog->id) }}" class="blogcard w-inline-block">
              <img src="{{ asset('b_images/' . $blog->image_path) }}" loading="lazy" alt="" class="blogimage">
              <div class="bloginfocard">
                <h4 class="blogcardheader">{{ $blog->name }}</h4>
                <span class="badge bg-info text-white" style="font-weight: 600">{{ $tema->name }}</span>
              </div>
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </div> 

    <!--TEMAS -->

    <div class="temasdiv mt-5">
      <div class="w-dyn-list">
        <div role="list" class="temaslist w-dyn-items w-row">
          @foreach ($temas as $tema)
          <div role="listitem" class="collection-item w-dyn-item w-col w-col-4">
          @guest
            <a href="{{ route('tema.show', $tema->id) }}" class="coolbutton5 existentes w-inline-block" type="button">                       
              <div class="text-block-6">{{ $tema->name }}</div>
            </a>
              @else
            <a class="coolbutton5 existentes w-inline-block" type="button" data-bs-toggle="modal" data-bs-target="#editarTarea_{{ $tema->id }}">                       
              <div class="text-block-6">{{ $tema->name }}</div>
            </a>
          @endguest
          </div>
           <!-- Modal -->
            <div class="modal fade" id="editarTarea_{{ $tema->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edición de tema</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="{{route('temas.update', $tema->id)}}" method="POST">
                  <div class="modal-body">
                    <!--campo de protección de formulario-->
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <!--Campos de formulario-->    
                    <label for="">Nombre del tema</label>
                    <input class="form-control" type="text" placeholder="Nombre del tema" name="name" value="{{ $tema->name }}">
                  </div>
                  <div class="modal-footer">
                    <form action="{{ route('temas.destroy', $tema->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }} 
                          <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                    </form> 
                      <button type="submit" class="btn btn-outline-success">Guardar cambios</button>
                      <a href="{{ route('temas.show', $tema->id) }}" type="button" class="btn btn-outline-info">Ver tema</a>
                  </div>
                    </form>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <div class="w-embed">
        <style>
        .coolbutton5:hover {
	box-shadow: 0 0 5px #97f9af,
							0 0 25px #97f9af,
              0 0 50px #97f9af,
              0 0 200px #97f9af;
          }
        </style>
      </div>
      <a href="{{ route('blog.index') }}" type="button" class="coolbutton5 w-inline-block mt-1">
        <div class="text-block-7">Ver todas las publicaciones</div>
      </a>
    </div>
  </div>
  </div>
  </div>



@endsection

