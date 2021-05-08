<?php $__env->startSection('content'); ?>

<h1>Editer le profile de <?php echo e($client->name); ?> </h1>

<form action="<?php echo e(route('clients.update', ['client' => $client->id ])); ?>" method="POST" enctype="multipart/form-data">
    <?php echo method_field('PATCH'); ?>
    <?php echo $__env->make('includes.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <button type="submit" class="btn btn-primary">Sauvergarder les informations</button>
</form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\monapp\resources\views/clients/edit.blade.php ENDPATH**/ ?>