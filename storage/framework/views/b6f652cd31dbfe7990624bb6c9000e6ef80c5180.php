

<?php $__env->startSection('title', 'Oficina 2.0'); ?>

<?php $__env->startSection('urlLink1','/'); ?>
<?php $__env->startSection('nameLink1','Home'); ?>

<?php $__env->startSection('urlLink2', '/'); ?>
<?php $__env->startSection('nameLink2', 'Ver Orçamentos'); ?>;

<?php $__env->startSection('content'); ?>

        <div class="full-height flex-center">
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
        

           <!-- <form class="form">
                <div class="form-group">
                    <small class="form-text text-muted" ><b>Cliente</b></small>                           
                    <input type="text" class="form-control form-control-lg border" id="cliente" name="cliente" >
                
                    <small class="form-text text-muted"><b>Vendedor</b></small>                         
                    <input type="text" class="form-control form-control-lg border" id="vendedor" name="vendedor">

                    <small class="form-text text-muted"><b>Descrição do Serviço</b></small>                         
                    <input type="textarea" class="form-control form-control-lg border" id="descricao" name="descricao">
                
                    <small class="form-text text-muted" ><b>Valor Orçado</b></small>                           
                    <input type="number" class="form-control form-control-lg border" id="valorOrcado" name="valorOrcado">
                    
                    <button class="btn btn-primary btn-block single-form-button" type="submit" id="submit" disabled>Fazer Orçamento</button>
                    
                </div>
            </form>
        --> 
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ezequias\Desktop\laravel\oficina2.0\CRUD\resources\views/cadastroOrcamento/cadastroOrcamento.blade.php ENDPATH**/ ?>