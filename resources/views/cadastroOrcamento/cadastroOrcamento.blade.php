@extends('layout/layout')

@section('title', 'Oficina 2.0')

@section('urlLink1','/')
@section('nameLink1','Home')

@section('urlLink2', '/orcamentos')
@section('nameLink2', 'Ver Orçamentos');

@section('content')

    <div class="WrapperPage">   

        <h1>Cadastro de Orçamento</h1>
        <form action="">
            <div class="WrapperFormField">
                <input class="input" type="text" name="cliente" id="cliente">
                <label class="textInput" for="cliente">Cliente</label>
            </div>

            <div class="WrapperFormField">
                <input class="input" type="text" name="vendedor" id="vendedor">
                <label class="textInput" for="cliente">Vendedor</label>
            </div>

            <div class="WrapperFormField">
                <textarea class="input" type="textarea" name="decricao" id="descricao"></textarea>
                <label class="textInput" for="cliente">Descrição</label>
            </div>

            <div class="WrapperFormField">
                <input class="input" type="number" name="Valor Orçado" id="valorOrcado">
                <label class="textInput" for="cliente">Valor Orçado</label>
            </div>
        
        </form>
        
    </div>
         
@endsection