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
    <section class="blog">
        <div class="blog__media">
        <?php if(isset($post->image)): ?>
            <figure class="blog__media--figure">
                <img src="<?php echo e($post->image); ?>" alt="" class="blog__media--image">
            </figure>
        <?php else: ?>
            <figure class="blog__media--figure">
                <h3 class="blog__media--empty">
                    No photo
                </h3>
            </figure>
        <?php endif; ?>
        </div>
        <div class="blog__wrapper">
            <article class="blog__info">
                <span class="blog__info--details">
                    <h2 class="blog__info--details-author"><?php echo e($post->author); ?></h2>
                    <h3 class="blog__info--details-date"><?php echo e($post->created_at->format('d-m-y')); ?></h3>
                </span>
                <p class="blog__info--description"><?php echo e($post->description); ?></p>
                <span class="blog__info--wrapper">
                    <?php if($post->stage == true): ?>
                        <h3 class="blog__info--wrapper-one">Stage 2</h3>
                    <?php else: ?>
                        <h3 class="blog__info--wrapper-two">Stage 1</h3>
                    <?php endif; ?>
                    <?php if($post->published == true): ?>
                        <h3 class="blog__info--wrapper-published">published</h3>
                    <?php else: ?>     
                        <h3 class="blog__info--wrapper-draft">draft</h3>
                    <?php endif; ?>
                </span>
            </article>
            <div class="blog__comments">
                <?php if($post->comments->isEmpty()): ?>
                    <p class="blog__comments--empty">There are no comments yet</p>
                <?php else: ?>
                    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <article class="blog__comment">
                            <span class="blog__comment--wrapper">
                                <h3 class="blog__comment--wrapper-author"><?php echo e($comment->author); ?></h3>
                            </span>
                            <p class="blog__comment--text"><?php echo e($comment->comment); ?></p>
                            <h3 class="blog__comment--date"><?php echo e($comment->created_at->format('d-m-y')); ?></h3>
                        </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
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
<?php endif; ?><?php /**PATH /var/www/html/resources/views/blog/post.blade.php ENDPATH**/ ?>