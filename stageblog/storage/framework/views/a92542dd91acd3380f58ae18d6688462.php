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
    <form class="form" action="<?php echo e(route('posts.store')); ?>" method="POST">
        <p class="form__title">Create post</p>
        <?php echo csrf_field(); ?>
        <div class="form__inputs">
            <span class="form__wrapper">
                <label for="title" class="form__label">Post name</label>
                <input type="text" value="<?php echo e(old('title')); ?>" name="title" class="form__input">
                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="form__error"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </span>
            <span class="form__wrapper">
                <label for="intro" class="form__label">Post intro</label>
                <textarea name="intro" class="form__input"><?php echo e(old('intro')); ?></textarea>
                <?php $__errorArgs = ['intro'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="form__error"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </span>
            <span class="form__wrapper">
                <label for="description" class="form__label">Post text</label>
                <textarea name="description" class="form__input--text"><?php echo e(old('description')); ?></textarea>
                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="form__error"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </span>
            <span class="form__wrapper">
                <label for="image" class="form__label">Media</label>
                <input type="text" value="<?php echo e(old('image')); ?>" name="image" class="form__input">
            </span>
            <input type="hidden" value="<?php echo e(Auth::user()->name); ?>" name="author">
            <input type="hidden" value="<?php echo e(Auth::user()->image); ?>" name="authorimage">
        </div>
        <div class="form__details">
            <span class="form__stage">
                <label for="stage">Stage 1</label>
                <input type="checkbox" name="stage" value="1" checked="" class="form__stage--checkbox">
            </span>
            <span class="form__details--publish">
                <span class="form__published">
                    <label for="published" class="form__published--label">Published</label>
                    <input type="checkbox" name="published" value="1" checked="" class="form__published--checkbox">
                </span>
                <input type="submit" class="form__submit" value="Publish">
            </span>
        </div>
    </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/blog/create.blade.php ENDPATH**/ ?>