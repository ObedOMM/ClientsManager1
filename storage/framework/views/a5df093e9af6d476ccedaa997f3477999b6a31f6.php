<?php $__env->startSection('content'); ?>

<h1>Créer un nouveau client</h1>

<form action="<?php echo e(route('clients.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo $__env->make('includes.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <button type="submit" class="btn btn-primary">Ajouter le client</button>
</form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\monapp\resources\views/clients/create.blade.php ENDPATH**/ ?>