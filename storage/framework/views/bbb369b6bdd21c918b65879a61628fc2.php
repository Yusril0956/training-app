<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8" />
    <link
        rel="icon"
        href=<?php echo e(asset('ptdi.ico')); ?>

    >
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, viewport-fit=cover"
    />
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    />
    <title><?php echo e(config('app.name')); ?></title>
    <!-- CSS files -->
    <link
        href=<?php echo e(asset('dist/css/tabler.min.css')); ?>

        rel="stylesheet"
    />
    <link
        href=<?php echo e(asset('dist/css/tabler-vendors.min.css')); ?>

        rel="stylesheet"
    />
    <link
        href=<?php echo e(asset('dist/css/demo.min.css')); ?>

        rel="stylesheet"
    />
    <link
        href=<?php echo e(asset('dist/css/font.css')); ?>

        rel="stylesheet"
    />
    <style>
        .company-color {
            color: #2F318B
        }

        [data-bs-theme=dark] .company-color {
            color: white
        }

        .hidden {
            display: none
        }

        [x-cloak] {
            display: none !important;
        }

        .bg-image {
            background-image: url("/background.svg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <?php echo $__env->yieldPushContent('style'); ?>
    <!-- JS files -->
    <script src=<?php echo e(asset('dist/js/jquery-3.7.0.js')); ?>></script>
    <script src=<?php echo e(asset('dist/js/jquery.dataTables.min.js')); ?>></script>
    <script src=<?php echo e(asset('dist/js/dataTables.bootstrap5.min.js')); ?>></script>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body
    x-data="darkMode"
    x-init="init"
    x-effect="set"
    x-on:storage.window="init"
>
    <div class="page <?php echo e(Auth::check() ? '' : 'page-center'); ?> bg-image">
        <?php if (isset($component)) { $__componentOriginal21b90aee62eb729a70bc5150038e88d2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal21b90aee62eb729a70bc5150038e88d2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('partials.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal21b90aee62eb729a70bc5150038e88d2)): ?>
<?php $attributes = $__attributesOriginal21b90aee62eb729a70bc5150038e88d2; ?>
<?php unset($__attributesOriginal21b90aee62eb729a70bc5150038e88d2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal21b90aee62eb729a70bc5150038e88d2)): ?>
<?php $component = $__componentOriginal21b90aee62eb729a70bc5150038e88d2; ?>
<?php unset($__componentOriginal21b90aee62eb729a70bc5150038e88d2); ?>
<?php endif; ?>
        <?php if(auth()->guard()->check()): ?>
            <?php if (isset($component)) { $__componentOriginalaf7ea84cdce97eb6cf55c1e5b16226df = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaf7ea84cdce97eb6cf55c1e5b16226df = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('partials.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaf7ea84cdce97eb6cf55c1e5b16226df)): ?>
<?php $attributes = $__attributesOriginalaf7ea84cdce97eb6cf55c1e5b16226df; ?>
<?php unset($__attributesOriginalaf7ea84cdce97eb6cf55c1e5b16226df); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaf7ea84cdce97eb6cf55c1e5b16226df)): ?>
<?php $component = $__componentOriginalaf7ea84cdce97eb6cf55c1e5b16226df; ?>
<?php unset($__componentOriginalaf7ea84cdce97eb6cf55c1e5b16226df); ?>
<?php endif; ?>
        <?php endif; ?>
        <div class="page-wrapper">
            <?php echo e($slot); ?>

        </div>
        <?php if (isset($component)) { $__componentOriginal3bcc21be352e90c327647659b100c2a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3bcc21be352e90c327647659b100c2a9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('partials.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3bcc21be352e90c327647659b100c2a9)): ?>
<?php $attributes = $__attributesOriginal3bcc21be352e90c327647659b100c2a9; ?>
<?php unset($__attributesOriginal3bcc21be352e90c327647659b100c2a9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bcc21be352e90c327647659b100c2a9)): ?>
<?php $component = $__componentOriginal3bcc21be352e90c327647659b100c2a9; ?>
<?php unset($__componentOriginal3bcc21be352e90c327647659b100c2a9); ?>
<?php endif; ?>
    </div>
    <!-- another JS files -->
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('darkMode', () => ({
                dark: false,
                init() {
                    this.dark = this.storage.get()
                },
                toggle() {
                    this.dark = !this.dark
                },
                set() {
                    if (this.dark) {
                        document.body.setAttribute('data-bs-theme', 'dark')
                    } else {
                        document.body.removeAttribute('data-bs-theme')
                    }

                    this.storage.set(this.dark)
                },
                storage: {
                    key: '<?php echo e(config('app.name')); ?>-darkMode',
                    get() {
                        if (localStorage.getItem(this.key) == 'on') {
                            return true
                        } else {
                            return false
                        }
                    },
                    set(dark) {
                        if (dark) {
                            localStorage.setItem(this.key, 'on')
                        } else {
                            localStorage.setItem(this.key, 'off')
                        }
                    }
                },
                cleanModalBackdrop() {
                    const elements = document.getElementsByClassName('modal-backdrop');
                    while (elements.length > 0) {
                        elements[0].remove();
                    }
                }
            }))
        })
    </script>
    <script
        src=<?php echo e(asset('dist/js/tabler.min.js')); ?>

        defer
    ></script>
    <script
        src=<?php echo e(asset('dist/js/demo.min.js')); ?>

        defer
    ></script>
    <script
        src=<?php echo e(asset('dist/libs/tom-select/dist/js/tom-select.base.min.js')); ?>

        defer
    ></script>
    <script
        src=<?php echo e(asset('dist/libs/litepicker/dist/litepicker.js')); ?>

        defer
    ></script>
    <script
        src=<?php echo e(asset('dist/libs/apexcharts/dist/apexcharts.min.js')); ?>

        defer
    ></script>
    <?php echo $__env->yieldPushContent('script'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\templates\resources\views/app.blade.php ENDPATH**/ ?>