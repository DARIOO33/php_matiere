<?php $__env->startSection('titre'); ?>
Ajouter Epreuve
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
<form method="POST" action="<?php echo e(route('epreuve.store')); ?>">
    <?php echo csrf_field(); ?>
    <p>
        <label for="numepreuve">num Epreuve</label>
        <input type="number" name="numepreuve" id="numepreuve">
    </p>
    <p>
        <label for="datepreuve">Date Epreuve</label>
        <input type="date" name="datepreuve" id="datepreuve">
    </p>
    <p>
        <label for="lieu">Lieu Epreuve</label>
        <input type="text" name="lieu" id="lieu">
    </p>

    <p>
        <label for="matiere_id">Matière</label>
        <input type="number" name="matiere_id" id="matiere_id">
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
<?php if(isset($epreuve)): ?>
<div>
<p>Numero Epreuve : <?php echo e($epreuve['numepreuve']); ?></p>
<p>Date Epreuve : <?php echo e($epreuve['datepreuve']); ?></p>
<p>Lieu Epreuve : <?php echo e($epreuve['lieu']); ?></p>
<p>Id Matiere : <?php echo e($epreuve['matiere_id']); ?></p>

</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('t1', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/dario/Documents/laravel/tp05/resources/views/ajoutEpreuve.blade.php ENDPATH**/ ?>