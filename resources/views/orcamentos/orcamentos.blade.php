@extends('layout/layout')

@section('title', 'Oficina 2.0')

@section('urlLink1','/')
@section('nameLink1','Home')

@section('urlLink2', '/orcamentos')
@section('nameLink2', 'Fazer Orçamento');

@section('content')

    <div class="WrapperPage">   

        <h1>Orçamentos</h1>
        <form action="">

            <h4> Filtrar por: </h4>

            <div class="WrapperFormField">
                <input class="input" type="text" name="vendedor" id="vendedor">
                <label class="textInput" for="cliente">Vendedor</label>
            </div>

            <div class="WrapperFormField">
                <input class="input" type="text" name="cliente" id="cliente">
                <label class="textInput" for="cliente">Cliente</label>
            </div>

            <div class="WrapperFormField">
                <input class="input" type="date" name="dataMinima" id="dataMinima">
                <label class="textInput" for="cliente">Data Mínima</label>   
            </div>

            <div class="WrapperFormField">
                <input class="input" type="date" name="dataMaxima" id="dataMaxima">
                <label class="textInput" for="cliente">Data Máxima</label>   
            </div>
            

            
        
        </form>
        
    </div>
         
@endsection