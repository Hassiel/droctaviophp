<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sat Mar 13 2021 20:57:05 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6046d8587a61fbdee210925b" data-wf-site="5fb84b55d6eff209e92250ed">
<head>
  <meta charset="utf-8">
  <title>Blog</title>
  <meta content="Contenido mensual sobre, ortopedia, traumatología, tumores óseos, etc." name="description">
  <meta content="Blog" property="og:title">
  <meta content="Contenido mensual sobre, ortopedia, traumatología, tumores óseos, etc." property="og:description">
  <meta content="Blog" property="twitter:title">
  <meta content="Contenido mensual sobre, ortopedia, traumatología, tumores óseos, etc." property="twitter:description">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="VQN-I-G7lHoYSxWWxJCR_fbR2Xf_DJNwTpH-aj8Axpk" name="google-site-verification">
  <meta content="Webflow" name="generator">
  <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/drsalvadoroctavio.webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Poppins:100,200,300,regular,500,600,700,800,900","DM Serif Display:regular","Yeseva One:regular"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-NZN7CD5KEV"></script>
  <script type="text/javascript">window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'G-NZN7CD5KEV', {'anonymize_ip': true});</script>
  <script src="https://www.google.com/recaptcha/api.js" type="text/javascript"></script><!--  Privado Notice start  -->
  <script src="https://www.cdn.privado.ai/1b693c08d7344fd88492dea55189cf03.js" type="text/javascript"></script>
  <!--  Privado Notice end  -->
  <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
  <meta name="google-site-verification" content="VQN-I-G7lHoYSxWWxJCR_fbR2Xf_DJNwTpH-aj8Axpk">
</head>
<body>
  <section id="Hero" class="hero">
    <nav data-w-id="3603ae1a-bd29-ec2e-af08-5f213dd8c0ad" class="header">
        <a href="{{ route('principal') }}" class="logo w-inline-block"><img src="images/LOGO-DR.png" loading="lazy" width="114" sizes="(max-width: 479px) 100vw, 114px" srcset="images/LOGO-DR-p-500.png 500w, images/LOGO-DR-p-800.png 800w, images/LOGO-DR-p-1080.png 1080w, images/LOGO-DR-p-1600.png 1600w, images/LOGO-DR-p-2000.png 2000w, images/LOGO-DR-p-2600.png 2600w, images/LOGO-DR-p-3200.png 3200w, images/LOGO-DR.png 5996w" alt="Dr. Octavio" class="image"></a>
        <div class="nav-bar">
          <div data-w-id="4321e1a5-9853-4cca-936e-f5a184d2e660" class="element-nav">
            <a href="{{ route('principal') }}" class="link-scroll">Inicio</a>
          </div>
          <div data-w-id="599162f8-23a6-0218-73f5-5327cf4b1258" class="element-nav">
            <a href="{{ route('blogs.index') }}" class="link-scroll">Blog</a>
          </div>
        </div>
       @guest
				<a href="{{ route('principal') }}" class="backbutton w-inline-block me-3" style="position: static" data-w-id="f7cb3604-db2d-b2c1-500e-b014b4645c40">
          <img src="images/left-arrow.svg" loading="lazy" width="25" alt="" class="volverarrow">
          <div class="volvertext">Volver</div>
        </a>
			@else
			<div class="dropdown">
				<button class="btn btn-outline-dark me-4" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
					Bienvenido, {{ Auth::user()->name }}
				</button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
					<li>
						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Cerrar Sesión
                    	</a>

	                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
	                        @csrf
	                    </form>
                	</li>
          <li>
            <a class="dropdown-item" href="{{ url()->previous() }}"">
                        Volver
            </a>
          </li>         
				</ul>
			</div>
			@endguest
      </nav>
    <div class="w-layout-grid grid">
      <div class="l-nea"></div>
      <div class="l-nea"></div>
      <div class="l-nea"></div>
      <div class="l-nea"></div>
      <div class="l-nea"></div>
    </div>
  </section>
  <a data-w-id="f7cb3604-db2d-b2c1-500e-b014b4645c40" href="{{ route('principal') }}" class="backbutton w-inline-block"><img src="images/left-arrow.svg" loading="lazy" width="25" alt="" class="volverarrow">
    <div class="volvertext">Volver</div>
  </a>
  <div class="sectionextra">
    <h2 class="titulo-section">Blog del Dr. Octavio</h2>

    <!--PUBLICACIONES -->

    <div class="w-dyn-list">
      <div role="list" class="blog-list w-dyn-items">
        @foreach ($blogs as $blog)
        <div role="listitem" class="w-dyn-item">
          <div class="cardcontainer">
            <a href="{{ route('blogs.show', $blog->id) }}" class="blogcard w-inline-block">
              <img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="blogimage">
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
      
  <!--FOOTER -->
  <footer id="footer" class="footer">
    <div class="footercontainer">
      <div class="div-block-2">
        <h4 class="footer-h4">Dr. Salvador Octavio Ramírez Valdivia</h4>
        <a href="https://hospitalesangeles.com/datos.php?ID=MO0462" target="_blank" class="hospital-link w-inline-block">
          <p class="paragraph-4">Hospital Angeles León, Gto.</p>
        </a>
      </div>
    </div>
    <div class="containerfooter">
      <div class="firmadoc">
        <div class="redessociales">
          <a href="https://www.linkedin.com/in/salvador-octavio-ram%C3%ADrez-valdivia-8a7b50205/" target="_blank" class="linkred w-inline-block"><img src="images/linkedin.png" loading="lazy" width="40" alt="" class="img-red"></a>
          <a href="https://www.facebook.com/DrOctavioRV" target="_blank" class="linkred w-inline-block"><img src="images/facebook.png" loading="lazy" width="40" alt="" class="img-red"></a>
          <a href="https://www.instagram.com/droctaviorv/" target="_blank" class="linkred w-inline-block"><img src="images/instagram.png" loading="lazy" width="40" alt="" class="img-red"></a>
          <a href="https://g.page/drsalvadoro?share" target="_blank" class="linkred w-inline-block"><img src="images/google.png" loading="lazy" width="40" alt="" class="img-red"></a>
          <a href="https://t.me/droctavio" target="_blank" class="linkred w-inline-block"><img src="images/telegram.png" loading="lazy" width="40" alt="" class="img-red"></a>
          <a href="https://wa.me/+524721208324" target="_blank" class="linkred w-inline-block"><img src="images/whatsapp.png" loading="lazy" width="40" alt="" class="img-red"></a>
        </div>
        <div class="derechos-pagina">
          <a href="aviso-reglamentario.html" class="link-block w-inline-block">
            <div class="text-block-3">Aviso reglamentario</div>
          </a>
          <div class="iniciodesesiondoc"> ©  </div>
          <div class="html-embed w-embed w-script">
            <script type="text/javascript">
  document.write(new Date().getFullYear());
</script>
          </div>
          <a href="{{ route('login') }}" class="iniciodesesiondoc">Dr. Octavio</a>
          <div class="text-block-4">  Derechos Reservados.</div>
        </div>
      </div>
    </div>
    <div class="derechos-pagina">
      <a href="https://www.linkedin.com/in/no%C3%A9-hassiel-monterrosas-bandala-b514291a1/" target="_blank" class="link-block-2 w-inline-block">
        <div class="text-block-5">Design by: Noé Hassiel</div>
      </a>
    </div>
  </footer>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5fb84b55d6eff209e92250ed" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="{{ asset('js/webflow.js') }}" type="text/javascript"></script>
  <!--JAVA BOOTSTAP!-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" 
    crossorigin="anonymous"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>