<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts --> 
        <link rel="stylesheet" href="https://use.typekit.net/amz3ntg.css">
        <link rel="preconnect" href="https://fonts.bunny.net">  
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>                                 	
    </head>
    <body>
        <section class="welcome">
            <article class="welcome__auth">
                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <h2 class="welcome__auth--name">
                            Welcome <?php echo e(Auth::user()->name); ?>

                        </h2>
                        <a href="<?php echo e(url('/dashboard/dashboard')); ?>" class="welcome__auth--dashboard">
                            Dashboard
                        </a>
                    <?php else: ?>
                        <h2 class="welcome__auth--name">
                            Welcome guest
                        </h2>
                        <a href="<?php echo e(route('login')); ?>" class="welcome__auth--signin">
                            Log in
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
            </article>
        </section> 
    </body>
</html>
<?php /**PATH /var/www/html/resources/views/welcome.blade.php ENDPATH**/ ?>