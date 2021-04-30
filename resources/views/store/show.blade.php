 @extends('layouts.fronts')   
@section('content')

 <div class="card">
	<div class="row no-gutters">
		<aside class="col-md-6">
<article class="gallery-wrap"> 
	<div class="img-big-wrap">
	   <a href=""><img src="{{ asset('p_images/' . $producto->image_p) }}"></a>
	</div> <!-- img-big-wrap.// -->
</article> <!-- gallery-wrap .end// -->
		</aside>
		<main class="col-md-6 border-left">
<article class="content-body">

<h2 class="title">{{ $producto->name }}</h2>


<div class="mb-3"> 
	<var class="price h4">${{ $producto->price }}</var> 
</div> 

<p>{{ $producto->description }}</p>

<dl class="row">
  <dt class="col-sm-3">Modelo#</dt>
  <dd class="col-sm-9">Odsy-1000</dd>

  <dt class="col-sm-3">Entregas</dt>
  <dd class="col-sm-9">Gardenia 14, La Joyita, Silao, Gto.</dd>

  <dt class="col-sm-3">En stock</dt>
  <dd class="col-sm-9">{{ $producto->quantity }}</dd>
</dl>
<hr>
	</div> <!-- row.// -->
</article> <!-- product-info-aside .// -->
		</main> <!-- col.// -->
	</div> <!-- row.// -->
    <div class="w-layout-grid blog" style="margin-top:15vh">
        @foreach ($productos as $producto)
          <a href="{{ route('productos.show', $producto->id) }}" class="blogcard w-inline-block">
            <img src="{{ asset('p_images/' . $producto->image_p) }}" loading="lazy" alt="" class="blogimage">
              <div class="bloginfocard">
                  <h4 class="blogcardheader">{{ $producto->name }}</h4>
              </div>
          </a>
        @endforeach
      </div>

@endsection