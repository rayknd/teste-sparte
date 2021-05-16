@extends('templates.template')

@section('content')
    <div class="container">
        <h5>SP-ARTE 365</h5>

        <h4>TODAS AS OBRAS</h4>
        <div class="text-center">    
            <button class="btn btn-primary">Incluir</button>
        </div><br>

        <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($obras as $obra)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$obra->nome_artista}}</h5>
                        <p class="card-text">"{{$obra->titulo}}"</p> 
                        <p class="card-text">R$ {{$obra->preco}}</p>
                    </div>
                    <div class="card-footer">
                         <a href="" class=""> 
                            <button class="btn btn-success btn-sm">Editar</button>
                         </a>
                         <a href="">
                            <button class="btn btn-danger btn-sm">Deletar</button>
                         </a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        

    </div>

@endsection