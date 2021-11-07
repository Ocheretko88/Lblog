<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Laravel Blog'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.6/tailwind.min.css">
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>

<?php if (isset($component)) { $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Header::class, []); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3)): ?>
<?php $component = $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3; ?>
<?php unset($__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo \Livewire\Livewire::scripts(); ?>


</body>
</html>
<?php /**PATH /var/www/resources/views/layouts/app.blade.php ENDPATH**/ ?>