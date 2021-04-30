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
          </div>
        </div>
        @endforeach
      </div>
    </div>
    {{ $blogs->links() }}
    <!--TEMAS -->
    <div class="temasdiv mt-5">
      <div class="w-dyn-list">
        <div role="list" class="temaslist w-dyn-items w-row">
          @foreach ($temas as $tema)
          <div role="listitem" class="collection-item w-dyn-item w-col w-col-4">
            <a href="{{ route('temas.show', $tema->id) }}" class="coolbutton5 existentes w-inline-block" type="button">                       
              <div class="text-block-6">{{ $tema->name }}</div>
            </a>
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
    </div>
  </div>
  </div>
  </div>
  @endsection   
  