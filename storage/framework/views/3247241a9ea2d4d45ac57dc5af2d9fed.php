<header class="navbar navbar-expand-md d-print-none">
    <div class="container-xl">
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbar-menu"
            aria-controls="navbar-menu"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-bars-3'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a
                href="<?php echo e(route('home')); ?>"
                class="text-decoration-none"
            >
                <img
                    src="<?php echo e(config('app.icon') ?? asset('static/home_logo_only.png')); ?>"
                    width="110"
                    height="32"
                    class="navbar-brand-image"
                >&nbsp;<span class="fw-medium"><?php echo e(config('app.name')); ?></span>
            </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
            <?php if (isset($component)) { $__componentOriginalbecd50f85d7a68595a6b0ed37460cfcf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbecd50f85d7a68595a6b0ed37460cfcf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.theme','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('partials.theme'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbecd50f85d7a68595a6b0ed37460cfcf)): ?>
<?php $attributes = $__attributesOriginalbecd50f85d7a68595a6b0ed37460cfcf; ?>
<?php unset($__attributesOriginalbecd50f85d7a68595a6b0ed37460cfcf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbecd50f85d7a68595a6b0ed37460cfcf)): ?>
<?php $component = $__componentOriginalbecd50f85d7a68595a6b0ed37460cfcf; ?>
<?php unset($__componentOriginalbecd50f85d7a68595a6b0ed37460cfcf); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal8ba1345038f832d8ee9f5eb70955ebd4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8ba1345038f832d8ee9f5eb70955ebd4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.userbox','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('partials.userbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8ba1345038f832d8ee9f5eb70955ebd4)): ?>
<?php $attributes = $__attributesOriginal8ba1345038f832d8ee9f5eb70955ebd4; ?>
<?php unset($__attributesOriginal8ba1345038f832d8ee9f5eb70955ebd4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8ba1345038f832d8ee9f5eb70955ebd4)): ?>
<?php $component = $__componentOriginal8ba1345038f832d8ee9f5eb70955ebd4; ?>
<?php unset($__componentOriginal8ba1345038f832d8ee9f5eb70955ebd4); ?>
<?php endif; ?>
        </div>
    </div>
</header>
<?php /**PATH /home/msi/Documents/templates/resources/views/components/partials/header.blade.php ENDPATH**/ ?>