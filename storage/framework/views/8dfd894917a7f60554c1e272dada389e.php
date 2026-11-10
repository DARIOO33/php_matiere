<?php $__env->startSection('titre'); ?>
    Ajouter matière
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
    <form method="POST" action="<?php echo e(route('matiere.store')); ?>">
        <?php echo csrf_field(); ?>
        <p>
            <label for="codemat">Code Matiere</label>
            <input type="number" name="codemat" id="codemat">
        </p>
         <p>
            <label for="libelle">Libelle Matiere</label>
            <input type="text" name="libelle" id="libelle">
        </p>
         <p>
            <label for="coef">Coef Matiere</label>
            <input type="number" name="coef" id="coef" step="any">
        </p>
        <p>
            <input type="submit" value="Envoyer">
        </p>
    </form>

<?php if($errors->any()): ?>

    <div class="alert alert-danger">

        <ul>

            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <li><?php echo e($error); ?></li>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>

    </div>

<?php endif; ?>

    <?php if(isset($matiere)): ?>
        <div>
            <p>Code Matiere: <?php echo e($matiere['codemat']); ?></p>
            <p>Libelle Matiere: <?php echo e($matiere['libelle']); ?></p>
            <p>Coef Matiere: <?php echo e($matiere['coef']); ?></p>
        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('t1', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/dario/Documents/laravel/tp05/resources/views/ajoutMatiere.blade.php ENDPATH**/ ?>