@extends("layouts.master")

@section("contenido")
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-8 mx-auto">
            <div class="card mx-auto">
                <div class="card-header bg-danger text-white">
                    <span>Actualizar un Juego</span>
                </div>
                <div class="card-body">
                    <div class="row mt-5">
                        <div class="col-12 col-md-6 col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-header bg-danger text-white">
                                    <span>Actualizar Juego: {{$juego->id}}</span>
                                </div>
                                <form method="POST" action="{{ route('juegos.put', ['juego' => $juego]) }}">
                                    @csrf
                                    @method('put')
                                    <div class="card-body">
                                        
                                        <div class="mb-3">
                                            <label for="nombre" class="form-label">Nombre del juego</label>
                                            <input type="text" id="nombre" class="form-control" name="nombre" :value="old('nombre')" placeholder="{{$juego->nombre}}" required autofocus>
                                        </div>
                                        <div class="mb-3">
                                            <label for="fecha_lanzamiento" class="form-label">Fecha de lanzamiento</label>
                                            <input type="text" id="fecha_lanzamiento" class="form-control" name="fecha_lanzamiento" :value="old('fecha_lanzamiento')" placeholder="{{$juego->fecha_lanzamiento}}" required autofocus>
                                        </div>
                                        <div class="mb-3">
                                            <label for="plataforma" class="form-label">Plataforma</label>
                                            <input type="text" id="plataforma" class="form-control"  name="plataforma" :value="old('plataforma')" placeholder="{{$juego->plataforma}}" required autofocus>
                                        </div>
                                    </div>
                                    <div class="card-footer d-grid gap-1">
                                        <x-button class="ml-4 bg-danger">{{ __('Actualizar Juego')}}</x-button>
                                    </div>
                                </form>
                            </div>
                        </div>  
                    </div>    
                </div>
            </div>
        </div>    
    </div>    
@endsection
@section("javascript")
    
@endsection