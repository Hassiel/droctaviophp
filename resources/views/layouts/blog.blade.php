<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sat Mar 13 2021 20:57:05 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6046de8b3115c3b5e7d74c56" data-wf-site="5fb84b55d6eff209e92250ed">
<head>
  <meta charset="utf-8">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="VQN-I-G7lHoYSxWWxJCR_fbR2Xf_DJNwTpH-aj8Axpk" name="google-site-verification">
  <meta content="Webflow" name="generator">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">  
  <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/drsalvadoroctavio.webflow.css') }}" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Poppins:100,200,300,regular,500,600,700,800,900","DM Serif Display:regular","Yeseva One:regular"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="{{ asset('images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
  <link href="{{ asset('images/webclip.png') }}" rel="apple-touch-icon">
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
        <a href="{{ route('principal') }}" class="logo w-inline-block"><img src="{{ asset('images/LOGO-DR.png') }}" loading="lazy" width="114" sizes="(max-width: 479px) 100vw, 114px" srcset="{{ asset('images/LOGO-DR-p-500.png 500w, images/LOGO-DR-p-800.png 800w, images/LOGO-DR-p-1080.png 1080w, images/LOGO-DR-p-1600.png 1600w, images/LOGO-DR-p-2000.png 2000w, images/LOGO-DR-p-2600.png 2600w, images/LOGO-DR-p-3200.png 3200w, images/LOGO-DR.png 5996w') }}" alt="Dr. Octavio" class="image"></a>
        <div class="nav-bar">
          <div data-w-id="4321e1a5-9853-4cca-936e-f5a184d2e660" class="element-nav">
            <a href="{{ route('principal') }}" class="link-scroll">Inicio</a>
          </div>
          <div data-w-id="599162f8-23a6-0218-73f5-5327cf4b1258" class="element-nav">
            <a href="{{ route('blogs.index') }}" class="link-scroll">Blog</a>
          </div>
        </div>
       @guest
				<a href="{{ url()->previous() }}" class="backbutton w-inline-block me-3" style="position: static" data-w-id="f7cb3604-db2d-b2c1-500e-b014b4645c40">
          <img src="{{ asset('images/left-arrow.svg') }}" loading="lazy" width="25" alt="" class="volverarrow">
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
  <div class="sectionextra">


    @yield('content')


 </div>
  <footer id="footer" class="footer section">
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
          <a href="https://www.linkedin.com/in/salvador-octavio-ram%C3%ADrez-valdivia-8a7b50205/" target="_blank" class="linkred w-inline-block"><img src="{{ asset('images/linkedin.png') }}" loading="lazy" width="40" alt="" class="img-red"></a>
          <a href="https://www.facebook.com/DrOctavioRV" target="_blank" class="linkred w-inline-block"><img src="{{ asset('images/facebook.png') }}" loading="lazy" width="40" alt="" class="img-red"></a>
          <a href="https://www.instagram.com/droctaviorv/" target="_blank" class="linkred w-inline-block"><img src="{{ asset('images/instagram.png') }}" loading="lazy" width="40" alt="" class="img-red"></a>
          <a href="https://g.page/drsalvadoro?share" target="_blank" class="linkred w-inline-block"><img src="{{ asset('images/google.png') }}" loading="lazy" width="40" alt="" class="img-red"></a>
          <a href="https://t.me/droctavio" target="_blank" class="linkred w-inline-block"><img src="{{ asset('images/telegram.png') }}" loading="lazy" width="40" alt="" class="img-red"></a>
          <a href="https://wa.me/+524721208324" target="_blank" class="linkred w-inline-block"><img src="{{ asset('images/whatsapp.png') }}" loading="lazy" width="40" alt="" class="img-red"></a>
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
  </a>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5fb84b55d6eff209e92250ed" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="{{ asset('js/webflow.js') }}" type="text/javascript"></script>
  <!--JAVA BOOTSTAP!-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" 
    crossorigin="anonymous"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script></script>
</body>
</html>   