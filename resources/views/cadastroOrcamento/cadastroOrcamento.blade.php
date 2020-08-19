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
                <input class="input" type="text" name="cliente" id="cliente" value="" placeholder="Nome do Cliente">
                <label class="textInput" for="cliente">Cliente</label>
            </div>

            <div class="WrapperFormField">
                <input class="input" type="text" name="vendedor" id="vendedor" value="" placeholder="Nome do Vendedor">
                <label class="textInput" for="cliente">Vendedor</label>
            </div>

            <div class="WrapperFormField">
                <textarea class="input" type="textarea" name="decricao" id="descricao" value="" placeholder="Descrição do Orçamento"></textarea>
                <label class="textInput" for="cliente">Descrição</label>
            </div>

            <div class="WrapperFormField">
                <input class="input money" type="text" name="Valor Orçado" id="valorOrcado" placeholder="R$">
                <label class="textInput" for="cliente">Valor Orçado</label>
            </div>

            <div class="ButtonContainer justifyContentEnd">
                <button class="submitButton"  type="submit">
                    Cadastrar
                </button>
            </div>
        
        </form>
        
    </div>
         
@endsection