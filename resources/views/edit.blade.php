@extends('layouts.master')

@section('content')

    <div class="sectionextra">
        <div class="form-block w-form">
            <form id="wf-form-Contacto" name="wf-form-Contacto" data-name="Contacto" 
            action="{{ route('blogs.store') }}" 
            method="POST" class="form">
            <!--campo de protección de formulario-->
                {{ csrf_field() }}
            <!--Inputs de entrada-->    
                <input type="text" class="text-field w-input" 
                maxlength="256" name="name" 
                placeholder="Título del post" 
                id="name" required="">
                <input type="text" class="text-field-3 w-input" 
                maxlength="256" name="area" 
                placeholder="correo electrónico" 
                >
                <textarea placeholder="contenido" maxlength="5000" 
                name="description" 
                class="textarea w-input" required="">
                </textarea>
                <input type="text" class="text-field-4 w-input" 
                maxlength="256" name="youtube" 
                placeholder="Video de youtube">
        </div>
            <input type="submit" value="Publicar" data-wait="Espere..." class="button cta w-button">
            </form>
        <div class="w-form-done">
          <div>Listo¡ Ya esta publicacdo</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Algo salió mal. Revisa tu entrada.</div>
        </div>
    </div>

@endsection