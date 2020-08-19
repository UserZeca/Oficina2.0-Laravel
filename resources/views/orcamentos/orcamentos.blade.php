@extends('layout/layout')

@section('title', 'Oficina 2.0')

@section('urlLink1','/')
@section('nameLink1','Home')

@section('urlLink2', '/cadastroOrcamento')
@section('nameLink2', 'Fazer Orçamento');

@section('content')

    <div class="WrapperPage">   

        <h1>Orçamentos</h1>
        <form action="">

            <h4> Filtrar por: </h4>

            <div class="WrapperFormField">
                <input class="input" type="text" name="vendedor" id="vendedor" placeholder="Nome do Vendedor">
                <label class="textInput" for="cliente">Vendedor</label>
            </div>

            <div class="WrapperFormField">
                <input class="input" type="text" name="cliente" id="cliente" placeholder="Nome do Cliente">
                <label class="textInput" for="cliente">Cliente</label>
            </div>

            <!-- Setando a fuso horario, para o de São Paulo -->
            <?php 
                date_default_timezone_set('America/Sao_Paulo');
            ?>

            <div class="WrapperFormField">
                <input 
                    class="input" 
                    type="date" 
                    value= <?php echo date('Y-m-d',strtotime('-1 day')) ?>
                    name="dataMinima" 
                    id="dataMinima"
                >
                <label class="textInput" for="cliente">Data Mínima </label>   
            </div>

            <div class="WrapperFormField">
                <input 
                    class="input" 
                    type="date" 
                    value= <?php echo date('Y-m-d')?>
                    name="dataMaxima" 
                    id="dataMaxima"
                >
                <label class="textInput" for="cliente">Data Máxima</label>   
            </div>
            
            <div class="ButtonContainer justifyContentEnd">
                <button class="submitButton"  type="submit">
                    Pesquisar
                </button>
            </div>
        
        </form>
        
    </div>
         
@endsection