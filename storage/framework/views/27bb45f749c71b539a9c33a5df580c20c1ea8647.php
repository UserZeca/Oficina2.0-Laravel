<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $__env->yieldContent('title'); ?></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <link href="<?php echo asset('css/reset.css')?>" rel="stylesheet" type="text/css">
        <link href="<?php echo asset('css/styles.css')?>" rel="stylesheet" type="text/css">
        <link href="<?php echo asset('css/components/footer.css')?>" rel="stylesheet" type="text/css">
        <link href="<?php echo asset('css/components/header.css')?>" rel="stylesheet" type="text/css">
        <link href="<?php echo asset('css/components/forms.css')?>" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
    
    </head>
    <body>
        <div class="WrapperPage">
            <nav class="header">
                
                <h1>Logo</h1>

                <div>
                    <a class="buttonLink" href=<?php echo $__env->yieldContent('urlLink1'); ?>>
                        <button> <?php echo $__env->yieldContent('nameLink1'); ?> </button>
                    </a>
                
                    <a class="buttonLink" href= <?php echo $__env->yieldContent('urlLink2'); ?>>
                        <button> <?php echo $__env->yieldContent('nameLink2'); ?> </button>
                    </a>
                </div>


            </nav>

            <div class="Main">
                <section>
                    <?php echo $__env->yieldContent('content'); ?>
                </section>
            </div>

            <footer class="footer">
                
                <div class="WrapperFooter">  

                    <ul class="InfoList">
                        <li> 
                            <div class="icons">
                                <a href="">
                                    <img src="<?php echo asset('asserts/icons/whatsapp.svg')?>" alt="icone de contato do whatsapp">
                                </a>
                                <a href="">
                                    <img src="<?php echo asset('asserts/icons/instagram.svg')?>" alt="icone de contato do instagram">
                                </a>
                                <a href="">
                                    <img src="<?php echo asset('asserts/icons/linkedin.svg')?>" alt="icone de contato do linkedin">                                
                                </a>
                            </div>
                        </li>

                        
                        <li>copyright©oficina2.0</li>  
                    </ul>
                </div>


            </footer>

        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
<?php /**PATH C:\Users\Ezequias\Desktop\laravel\oficina2.0\CRUD\resources\views/layout.blade.php ENDPATH**/ ?>