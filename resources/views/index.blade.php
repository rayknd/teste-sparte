@extends('templates.template')

@section('content')
    <div class="container">
        <h5 class="mt-3 mb-4">SP-ARTE 365</h5>

        
        <div class=" mt-3 mb-4">   
            <h4>TODAS AS OBRAS</h4>
           
            <a href="{{url('obras/create')}}"> 
                <button class="btn btn-primary col-sm-2 offset-sm-9">Incluir</button>
            </a>
        </div>

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
                        <a href="{{url("obras/$obra->id ")}}" class="stretched-link"></a>
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