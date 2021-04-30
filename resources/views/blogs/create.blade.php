 @extends('layouts.blog')   
@section('content')
    <div class="w-form">
      <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        <!--campo de protección de formulario-->
            {{ csrf_field() }}
        <label for="name" class="creationlabel">Título</label>
        <input spellcheck="true" type="text" class="creationinput w-input" maxlength="256" name="name" data-name="name" placeholder="Título" required="">

        <label for="image" class="creationlabel">Imagen</label>
        <input type="file" name='image'>
        
        <label for="area" class="creationlabel">Tema</label>
        <select id="area" name="topic_id" data-name="area" class="creationinput w-select">
          @foreach ($temas as $tema)
              <option value="{{ $tema->id }}">{{ $tema->name }}</option>
          @endforeach
        </select>
        <label for="description" class="creationlabel">Contenido Principal</label>
        <textarea spellcheck="true" placeholder="Contenido..." maxlength="5000" id="description" name="description" required="" data-name="description" class="creationinput w-input"></textarea>

        <label for="quote">Frase</label>
        <input type="text" class="creationinput w-input" maxlength="256" name="quote" id="quote" placeholder="Frase importante" spellcheck="true" class="creationinput w-input">

        <label for="subtitulo1">Sub Título1</label>
        <input type="text"spellcheck="true" placeholder="Sub Titulo 1" id="subtitulo1" class="creationinput w-input" name="subtitulo1">

        <label for="subdesc1">Desarrollo de subtitulo1</label>
        <textarea name="subdesc1" id="subdesc1" cols="30" rows="10" spellcheck="true" maxlength="5000" class="creationinput w-input"></textarea>

        <label for="subtitulo2">Sub Título2</label>
        <input type="text" spellcheck="true" placeholder="Sub Titulo 2" id="subtitulo2" class="creationinput w-input" name="subtitulo2">

        <label for="subdesc2">Desarrollo de subtitulo1</label>
        <textarea name="subdesc2" id="subdesc2" cols="30" rows="10" spellcheck="true" maxlength="5000" class="creationinput w-input"></textarea>
        <!--<label for="name" class="creationlabel">Youtube</label>
        <input type="text" class="creationinput w-input" maxlength="256" name="youtube" data-name="youtube" placeholder="Link de youtube (si tiene alguno)">-->
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
  