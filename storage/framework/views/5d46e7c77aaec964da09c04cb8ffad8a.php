<?php $__env->startSection('titre'); ?>
    Les épreuves
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
    <table>
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Date</th>
                <th>Lieu</th>
                <th>Matière</th>
            </tr>
        </thead>
        <tbody>
           
    <?php $__currentLoopData = $epreuves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $epreuve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($epreuve->numepreuve); ?></td>
            <td><?php echo e($epreuve->datepreuve); ?></td>
            <td><?php echo e($epreuve->lieu); ?></td>
            <td>
                <?php if($epreuve->matiere): ?>
                    <a href="<?php echo e(route('epreuve.matiere', $epreuve->numepreuve)); ?>"><?php echo e($epreuve->matiere->libelle); ?></a>
                <?php else: ?>
                    Non affectée
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
    </table>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('t1', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/dario/Documents/laravel/tp05/resources/views/affEpreuve.blade.php ENDPATH**/ ?>