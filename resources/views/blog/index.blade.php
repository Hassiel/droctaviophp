 @extends('layouts.front')   
@section('content') 
    <h2 class="titulo-section">Blog del Dr. Octavio</h2>

    <!--PUBLICACIONES -->

    <div class="w-dyn-list">
      <div role="list" class="blog-list w-dyn-items">
        @foreach ($blogs as $blog)
        <div role="listitem" class="w-dyn-item">
          <div class="cardcontainer">
            <a href="{{ route('blog.show', $blog->id) }}" class="blogcard w-inline-block">
              <img src="{{ asset('b_images/' . $blog->image_path) }}" loading="lazy" alt="" class="blogimage">
              <div class="bloginfocard">
                <h4 class="blogcardheader">{{ $blog->name }}</h4>
                <span class="badge bg-info text-white" style="font-weight: 600">{{ $blog->topic_id }}</span>
              </div>
            </a>
            @guest
                @else
                <div class="cardbuttoncontainer">
              <a href="{{ route('blogs.edit', $blog->id) }}" class="cardbutton _1 w-inline-block">
                <img src="images/draw.png" loading="lazy" width="20" alt="" class="cardbuttonimage"></a>
               <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
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
    {{ $blogs->links() }}
    @guest
        @else
      <div class="addnewbutton">
      <a data-w-id="e5c33930-a9d6-c5f2-53ae-f8bf50989d46" href="{{ route('blogs.create') }}" class="blogcard newpost w-inline-block">
        <div class="bloginfocard newpost">
          <div data-w-id="875cdc08-dfa6-61ba-aa8c-fa520186febf" data-animation-type="lottie" data-src="documents/add-post.json" data-loop="0" data-direction="1" data-autoplay="0" data-is-ix2-target="1" data-renderer="svg" data-default-duration="3" data-duration="0" data-ix2-initial-state="0"></div>
          <h4 class="blogcardheader">Nueva publicación</h4>
        </div>
      </a>
    </div>
    @endguest

     <!--TEMAS -->

    <div class="temasdiv mt-5">
      <div class="w-dyn-list">
        <div role="list" class="temaslist w-dyn-items w-row">
          @foreach ($temas as $tema)
          <div role="listitem" class="collection-item w-dyn-item w-col w-col-4">
          @guest
            <a href="{{ route('temas.show', $tema->id) }}" class="coolbutton5 existentes w-inline-block" type="button">                       
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
                      <a href="{{ route('temas.show', $tema->id) }}" type="button" class="btn btn-outline-info">Ver tarea</a>
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
      @guest
          @else
          <a type="button" class="coolbutton5 w-inline-block mt-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <div class="text-block-7">Crear nuevo tema</div>
      </a>
      @endguest
    </div>
  </div>
  </div>
  </div>
  <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalTarea">Crear nuevo tema</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('temas.store')}}" method="POST">
                  <div class="modal-body">
                      <!--campo de protección de formulario-->
                  {{ csrf_field() }}
                  <!--Campos de formulario-->
                  <div class="form-group mb-3">
                      <label for="">Nombre del tema</label>
                      <input class="form-control"type="text" placeholder="Nombre del tema" name="name">
                  </div>          
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
                      <button type="submit" class="btn btn-outline-success">Guardar tema</button>
                  </div>
              </form>
          </div>
        </div>
      </div>
  @endsection   
  