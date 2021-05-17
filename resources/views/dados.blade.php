@extends('templates.template')

@section('content')
    <div class="container">
        <h5>SP-ARTE 365</h5>

        
        <div class="text-center mt-3 mb-4">
            <h1>OBRAS</h1>  
        </div>

        <div class=" ">    
            <img class="card-img-top mt-3 mb-4" src="..." alt="Card image cap">
            <div class="col-md-6 offset-md-6 mt-3 mb-4">
                <h5 class="card-title">{{$obra->nome_artista}}</h5>
                <p class="card-text">"{{$obra->titulo}}"</p> 
                <p class="card-text">Dimensão: {{$obra->altura}} x {{$obra->largura}} x {{$obra->profundidade}} cm
                <p class="card-text">Preço: R$ {{$obra->preco}}</p>
            </div>
                        
        </div>

        <div class="col-md-6 offset-md-6">
                <a href="{{url("obras/$obra->id/edit")}}"> 
                    <button class="btn btn-success btn-sm">Editar</button>
                </a>
                <a href="{{url("obras/$obra->id")}}" class="js-del">
                    <button class="btn btn-danger btn-sm">Deletar</button>
                </a>
        </div>
    </div>

@endsection