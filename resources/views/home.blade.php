@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2 class="h2hero"><strong  class="bold-text">Hola {{ Auth::user()->name }}</strong></h2>
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="card-body">
                            <p class="card-text">Crea nuevas publicaciones y agrega nuevos productos a la lista.</p>
                            <a href="{{ route('blogs.index') }}" class="card-link">Publicaciones</a>
                            <a href="#" class="card-link">Productos</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
