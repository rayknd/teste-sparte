@extends('templates.template')

@section('content')
    <div class="container">
        <h5 class="mt-3 mb-4">SP-ARTE 365</h5>

        <h4 class="text-center">@if(isset($obra)) EDITAR @else CADASTRAR  @endif OBRA</h4>

        
            @if(isset($errors) && count($errors) > 0)
                <div class="text-center mt-4 mb-4 p-2 alert-danger">
                    @foreach($errors->all() as $error)
                        {{$error}}<br />
                    @endforeach
                </div>
            
            @endif
        
        @if(isset($obra))
         <form name="formEdit" id="formEdit" method="POST" action="{{url("obras/$obra->id")}}">
            @method('PUT')
        @else
            <form name="formCad" id="formCad" method="POST" action="{{url('obras')}}">
        @endif

            @csrf
            <div class="m-auto">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <input class="form-control mt-3 mb-4" type="text" id="titulo" name="titulo" 
                            value="{{$obra->titulo ?? '' }}" placeholder="Titulo da obra" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <input class="form-control mt-3 mb-4" type="text" id="nome_artista" name="nome_artista" 
                            value="{{$obra->nome_artista ?? ''}}" placeholder="Nome do autor" required/>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-2 offset-sm-3">
                        <input class="form-control mt-3 mb-4" type="text" id="altura" name="altura" 
                            value="{{$obra->altura ?? ''}}" placeholder="Altura" required/>
                    </div>
                    <div class="col-sm-2">
                    <input class="form-control mt-3 mb-4" type="text" id="largura" name="largura" 
                        value="{{$obra->largura ?? ''}}" placeholder="Largura" required/>
                    </div>
                    <div class="col-sm-2">
                        <input class="form-control mt-3 mb-4" type="text" id="profundidade" name="profundidade" 
                            value="{{$obra->profundidade}}" placeholder="Profundidade" required/>
                    </div>
                
                </div>
                <div class="row g-1">
                    <div class="col-sm-2 offset-sm-3">
                    <input class="form-control mt-3 mb-4" type="text" id="preco" name="preco" 
                        value="{{$obra->preco ?? ''}}" placeholder="Preço" required/>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary col-sm-2 offset-sm-5" value="Salvar"></input>
               
            </div>
        </form>

    </div>    

@endsection