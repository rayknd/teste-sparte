@extends('templates.template')

@section('content')
    <header>
        <h5 class="col-md-6 offset-md-2">SP-ARTE 365</h5>
    </header>
    <div class="container">
        
        <style>
            .card-img-top{
                max-width: 100%;
                max-height: 100%;
            }

            body{
                background-color:#D3D3D3;
                
            }
            header{
                background-color:#FFFF;
            }
        </style>
        <div class="painel">
            <div class="text-center mt-3 mb-4">
                <h1>OBRAS</h1>  
            </div>
            @csrf
            
            <div class="col-md-4 offset-md-1">
                <img class="card-img-top img-fluid" src="/img/events/{{"$obra->imagem"}}" alt="Card image cap">
            </div>
                
            <div class="col-sm-3 offset-sm-9" style=" margin-top: -400px;">
                <hr>
                <h5 class="card-title mb-5">{{$obra->nome_artista}}</h5>
                <hr>
                <p class="card-text mt-5">"{{$obra->titulo}}"</p> 
                <p class="card-text">Dimensão: {{$obra->altura}} x {{$obra->largura}} x {{$obra->profundidade}} cm
                <p class="card-text mb-5">Preço: R$ {{$obra->preco}}</p>
            </div>

            <div class="col-sm-3 offset-sm-9">
                <a href="{{url("obras/$obra->id/edit")}}"> 
                    <button class="btn btn-success btn-sm">Editar</button>
                </a>
                <a href="{{url("obras/$obra->id")}}" class="js-del">
                    <button class="btn btn-danger btn-sm">Deletar</button>
                </a>
            </div>
        </div>    
    </div>

@endsection