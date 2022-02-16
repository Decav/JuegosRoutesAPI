@extends("layouts.master")

@section("contenido")
<div class="row mt-5">
    
    
    <div class="col-12 col-md-6 col-lg-8 mx-auto">
        <div class="card mx-auto">
            <div class="card-header bg-danger text-white text-center">
                <span>BDKarate API Juegos</span>
                
            </div>
            <div class="card-body">
                <div class="row mt-5">
                    <div class="col-12 col-md-6 col-lg-5 mx-auto">
                        <div class="card mb-5">
                            <div class="card-header bg-danger text-white">
                                <span>Rutas BDKarate API</span>
                            </div>
                            <div class="card_body p-3">
                                <div>
                                    <span>Get: http://127.0.0.1:8000/juegos</span>
                                </div>
                                <div>
                                    <span>Post: http://127.0.0.1:8000/juegos</span>
                                </div>
                                <div>
                                    <span>Put: http://127.0.0.1:8000/juegos/{id_juego}</span>
                                </div>
                                <div>
                                    <span>Delete: http://127.0.0.1:8000/juegos/{id_juego}</span>
                                </div>
                            </div>
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