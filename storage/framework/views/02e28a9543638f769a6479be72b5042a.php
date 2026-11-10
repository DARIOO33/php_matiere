<?php $__env->startSection('titre'); ?>
    Matière de l'épreuve <?php echo e($epreuve->numepreuve); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
    <h2>Épreuve numéro <?php echo e($epreuve->numepreuve); ?></h2>
    <p>Libellé de la matière : <?php echo e($epreuve->matiere->libelle); ?></p>
    <p><a href="<?php echo e(route('epreuve')); ?>">Retour aux épreuves</a></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('t1', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/dario/Documents/laravel/tp05/resources/views/epreuveMatiere.blade.php ENDPATH**/ ?>