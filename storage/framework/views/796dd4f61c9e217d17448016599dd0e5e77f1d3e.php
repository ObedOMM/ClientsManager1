<?php $__env->startComponent('mail::message'); ?>
# Bonjour

Vous avez reçu un mail de la part de <?php echo e($data['name']); ?> (<?php echo e($data['email']); ?>)


Message
<?php echo e($data['message']); ?>


<?php $__env->startComponent('mail::button', ['url' => '']); ?>
Button Text
<?php if (isset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e)): ?>
<?php $component = $__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e; ?>
<?php unset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\laragon\www\monapp\resources\views/emails/contact/contact-form.blade.php ENDPATH**/ ?>