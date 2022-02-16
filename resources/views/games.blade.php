@extends("layouts.master")

@section("contenido")
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-8 mx-auto">
            <div class="card mx-auto">
                <div class="card-header bg-danger text-white">
                    <span>Agregar un Juego</span>
                </div>
                <div class="card-body">
                    <div class="row mt-5">
                        <div class="col-12 col-md-6 col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-header bg-danger text-white">
                                    <span>Agregar Juegos</span>
                                </div>
                                
                                
                                    
                                <form method="POST" action="{{ route('juegos.post') }}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="nombre" class="form-label">Nombre del juego</label>
                                            <input type="text" id="nombre" class="form-control" name="nombre" :value="old('nombre')" required autofocus>
                                        </div>
                                        <div class="mb-3">
                                            <label for="fecha_lanzamiento" class="form-label">Fecha de lanzamiento</label>
                                            <input type="text" id="fecha_lanzamiento" class="form-control" name="fecha_lanzamiento" :value="old('fecha_lanzamiento')" required autofocus>
                                        </div>
                                        <div class="mb-3">
                                            <label for="plataforma" class="form-label">Plataforma</label>
                                            <input type="text" id="plataforma" class="form-control"  name="plataforma" :value="old('plataforma')" required autofocus>
                                        </div>
                                    </div>
                                    <div class="card-footer d-grid gap-1">
                                        <x-button class="ml-4 btn bg-danger">{{ __('Ingresar Juego')}}</x-button>
                                    </div>
                                </form>
                                
                                    
                                
                            </div>

                        </div> 
                        <div class="col-12 col-md-12 col-lg-6 mx-auto bg-white m-4 p-8 rounded shadow w-full table-responsive">
                            <table class="table table-hover table-bordered table-striped">
                                <thead class="bg-danger text-white">
                                    <tr>
                                        <td class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">ID</td>
                                        <td class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">nombre</td>
                                        <td class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Fecha de lanzamiento</td>
                                        <td class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Plataforma</td>
                                        <td class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Acciones</td>
                                    </tr>
                                </thead>
                                <tbody id="tbody-juegos" class="divide-y divide-gray-200">
                                    
                                </tbody>
                            </table>
                        </div>   
                    </div>    
                </div>
            </div>
        </div>    
    </div>    
@endsection
@section("javascript")
    <script src="{{asset('js/service/juegosService.js')}}"></script>
    <script src="{{asset('js/juegos.js')}}"></script>
@endsection