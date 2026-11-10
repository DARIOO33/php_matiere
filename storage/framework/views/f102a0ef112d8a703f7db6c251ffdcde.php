<?php $__env->startSection('titre'); ?>
    Épreuves de <?php echo e($matiere->libelle); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
    <h2>Épreuves de la matière <?php echo e($matiere->codemat); ?> — <?php echo e($matiere->libelle); ?></h2>

    <table>
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Date</th>
                <th>Lieu</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $epreuves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $epreuve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($epreuve->numepreuve); ?></td>
                    <td><?php echo e($epreuve->datepreuve->format('d/m/Y')); ?></td>
                    <td><?php echo e($epreuve->lieu); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="3">Aucune épreuve pour cette matière.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

    <p><a href="<?php echo e(route('matiere')); ?>">Retour aux matières</a></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('t1', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/dario/Documents/laravel/tp05/resources/views/matiereEpreuves.blade.php ENDPATH**/ ?>