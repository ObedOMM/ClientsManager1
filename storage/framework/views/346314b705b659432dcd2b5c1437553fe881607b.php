<?php $__env->startComponent('mail::message'); ?>
# Bienvenu <?php echo e($user->name); ?>


Merçi de vous être enregistré(e) avec l'adresse <?php echo e($user->email); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\laragon\www\monapp\resources\views/emails/user/welcome-user.blade.php ENDPATH**/ ?>