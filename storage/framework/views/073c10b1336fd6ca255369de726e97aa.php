<?php $__env->startSection('titre'); ?>
    Les matières
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
    <table>
        <thead>
            <tr>
                <th>Code</th>
                <th>Libelle</th>
                <th>Coefficient</th>
                <th>Épreuves</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $matieres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matiere): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($matiere ->codemat); ?></td>
                    <td><?php echo e($matiere->libelle); ?></td>
                    <td><?php echo e($matiere->coef); ?></td>
                    <td><a href="<?php echo e(route('matiere.epreuves', $matiere->codemat)); ?>">Voir les épreuves (<?php echo e($matiere->epreuves_count); ?>)</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('t1', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/dario/Documents/laravel/tp05/resources/views/affMat.blade.php ENDPATH**/ ?>