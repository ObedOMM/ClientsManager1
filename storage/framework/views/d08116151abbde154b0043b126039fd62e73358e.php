<?php $__env->startSection('content'); ?>
    <h1> <?php echo e($client->name); ?> </h1>
    <a href="/clients/<?php echo e($client->id); ?>/edit" class="btn btn-secondary">Editer</a>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('destroy', 'App\Client')): ?>
    <form action="/clients/<?php echo e($client->id); ?>" method="POST" style="display:inline;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button class="btn btn-danger">Supprimer</button>
    </form>
    <?php endif; ?>

    <hr>
    <p><strong>Email :</strong> <?php echo e($client->email); ?> </p>
    <p><strong>Entreprise: </strong> <?php echo e($client->entreprise->name); ?> </p>
    <?php if($client->image): ?>
        <img src="<?php echo e(asset('storage/' . $client->image)); ?>" alt="client-avatar" class="img-thumbnail" width="200">
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\monapp\resources\views/clients/show.blade.php ENDPATH**/ ?>