@extends('layout/layout')

@section('title', 'Oficina 2.0')

@section('urlLink1','/')
@section('nameLink1','Home')

@section('urlLink2', '/')
@section('nameLink2', 'Ver Orçamentos');


@section('content')

    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Oficina 2.0
            </div>

            <div class="links linkContainer">
                <a class="" href="">Orçamentos</a>
                <a href="/cadastroOrcamento">Fazer orçamento</a>
            </div>
        </div>
    </div>

@endsection
    


