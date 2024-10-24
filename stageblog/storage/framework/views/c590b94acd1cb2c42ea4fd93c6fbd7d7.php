<nav class="header__navigation">
    <ul class="header__navigation--list">
        <li class="<?php if(Route::currentRouteName() == 'blog.index'): ?> header__navigation--list-active <?php else: ?> header__navigation--list-item <?php endif; ?>">
            <a href="<?php echo e(route('blog.index')); ?>">Blog</a>
        </li>
            <!-- <li class="<?php if(Route::currentRouteName() == 'contact.form'): ?> header__navigation--list-active <?php else: ?> header__navigation--list-item <?php endif; ?>">
                <a href="<?php echo e(route('contact.form')); ?>">Contact</a>
        </li> -->
        <li class="<?php if(Route::currentRouteName() == 'blog.stageone'): ?> header__navigation--list-active <?php else: ?> header__navigation--list-item <?php endif; ?> header__navigation--list-button">
            Stage
            <div class="header__navigation--list-wrapper">
                <a href="<?php echo e(route('blog.stageone')); ?>">Stage 1</a>
                <a href="<?php echo e(route('blog.stagetwo')); ?>">Stage 2</a>
            </div>
        </li>
        <li class="<?php if(Route::currentRouteName() == 'about.about'): ?> header__navigation--list-active <?php else: ?> header__navigation--list-item <?php endif; ?>">
            <a href="<?php echo e(route('about')); ?>">About</a>
        </li>
        <li class="header__navigation--list-item">
            <a href="https://saramohammed.com/" target="_BLANK">Portfolio</a>
        </li>
    </ul>
    <span class="header__navigation--item">
        <?php if(auth()->guard()->guest()): ?>
        <p class="header__navigation--auth">guest</p>
        <?php endif; ?>
        <?php if(auth()->guard()->check()): ?>
        <img src="<?php echo e(Auth::user()->image); ?>" alt="" class="header__navigation--auth-image">
        <p class="header__navigation--auth"><?php echo e(Auth::user()->name); ?></p>
        <?php endif; ?>
    </span>
</nav><?php /**PATH /var/www/html/resources/views/layouts/navigation.blade.php ENDPATH**/ ?>