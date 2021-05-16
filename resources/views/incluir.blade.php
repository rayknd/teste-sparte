@extends('templates.template')

@section('content')
    <div class="container">
        <h5 class="mt-3 mb-4">SP-ARTE 365</h5>

        <h4 class="text-center">CADASTRAR OBRA</h4>

        <form name="formCad" id="formCad" method="POST" action="{{url('obras')}}">  
            @csrf
            <div class="m-auto">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <input class="form-control mt-3 mb-4" type="text" id="titulo" name="titulo" placeholder="titulo da obra" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <input class="form-control mt-3 mb-4" type="text" id="nome_artista" name="nome_artista" placeholder="Nome do autor" />
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-2 offset-sm-3">
                        <input class="form-control mt-3 mb-4" type="text" id="altura" name="altura" placeholder="Altura" />
                    </div>
                    <div class="col-sm-2">
                    <input class="form-control mt-3 mb-4" type="text" id="largura" name="largura" placeholder="Largura" />
                    </div>
                    <div class="col-sm-2">
                        <input class="form-control mt-3 mb-4" type="text" id="profundidade" name="profundidade" placeholder="Profundidade" />
                    </div>
                
                </div>
                <div class="row g-1">
                    <div class="col-sm-2 offset-sm-3">
                    <input class="form-control mt-3 mb-4" type="text" id="preco" name="preco" placeholder="Preço" />
                    </div>
                </div>
                <input type="submit" class="btn btn-primary col-sm-2 offset-sm-5" value="Salvar"></input>
               
            </div>
        </form>

    </div>    

@endsection