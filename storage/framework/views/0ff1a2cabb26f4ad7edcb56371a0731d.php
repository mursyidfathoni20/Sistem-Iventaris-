
<?php $__env->startSection('title', 'Page Mahasiswa'); ?>
<?php $__env->startSection('content'); ?>

<button><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></button>
<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
    <?php echo csrf_field(); ?>
</form>
<h1>woiiiii</h1>
<a href="<?php echo e(route('home')); ?>">Home</a>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\PraktikumWeb\resources\views/mahasiswa.blade.php ENDPATH**/ ?>