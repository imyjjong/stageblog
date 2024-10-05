<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <a href="<?php echo e(route('posts.create')); ?>" class="blogs__new">New post</a>
    <section class="blogs">
        <p class="blogs__results">There are <?php echo e($posts->total()); ?> results</p>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="post">
            <div class="post__blog">
                <span class="post__details">
                    <h3 class="post__details--author"><?php echo e($post->author); ?></h3>
                    <p class="post__details--date"><?php echo e($post->created_at->format('d-m-y')); ?></p>
                </span>
                <h3 class="post__intro"><?php echo e($post->intro); ?></h3>
                <span class="post__wrapper">
                    <?php if($post->stage == true): ?>
                        <h3 class="post__stage--one">Stage 2</h3>
                    <?php else: ?>
                        <h3 class="post__stage--two">Stage 1</h3>
                    <?php endif; ?>
                    <?php if($post->published == true): ?>
                        <h3 class="post__wrapper--published">published</h3>
                    <?php else: ?>     
                        <h3 class="post__wrapper--draft">draft</h3>
                    <?php endif; ?>
                </span>
                <?php if(isset($post->image)): ?>
                    <img class="post__image" src="<?php echo e($post->image); ?>" alt="">
                <?php endif; ?>
            </div>
            <div class="post__comments">
                <form action="<?php echo e(route('comments.store', $post)); ?>" method="POST" class="post__comments--form">
                    <?php echo csrf_field(); ?>
                    <input name="author" type="hidden" value="<?php echo e(Auth::user()->name); ?>">
                    <input class="post__comments--input" type="text" name="comment">
                    <input class="post__comments--submit" type="submit" value="Send">
                </form>
            </div>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="pagination">
        <?php echo e($posts->links()); ?>

    </div>
        
    </section>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/blog/blog.blade.php ENDPATH**/ ?>