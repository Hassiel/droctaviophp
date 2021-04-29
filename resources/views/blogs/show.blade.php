
 @extends('layouts.blog')   
@section('content') 
  <header class="masthead" style="background-image: url('img/post-bg.jpg')">
    <img src="{{ asset('b_images/' . $blog->image_path) }}" loading="lazy" alt="" class="postimage">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="titulo-section">
            <h1>{{ $blog->name }}</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="mt-5 col-lg-8 col-md-10 mx-auto post-information">
          <p>{{ $blog->description }}</p>

          <h2 class="section-heading"">The Final Frontier</h2>

          <p></p>

          <blockquote class="blockquote"></blockquote>

          <h2 class="section-heading"" >Reaching for the Stars</h2>

          <p></p>

        </div>
      </div>
    </div>
  </article>

    <div class="temasdiv mt-5">
      <div class="w-dyn-list">
        <div role="list" class="temaslist w-dyn-items w-row">
          
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
@endsection
 