<?php $__env->startSection('title', 'Oficina 2.0'); ?>

<?php $__env->startSection('urlLink1','/'); ?>
<?php $__env->startSection('nameLink1','Home'); ?>

<?php $__env->startSection('urlLink2', '/'); ?>
<?php $__env->startSection('nameLink2', 'Ver Orçamentos'); ?>;


<?php $__env->startSection('content'); ?>

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

<?php $__env->stopSection(); ?>
    



<?php echo $__env->make('layout/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ezequias\Desktop\laravel\oficina2.0\CRUD\resources\views/home/home.blade.php ENDPATH**/ ?>