<?php $__env->startSection('content'); ?>

    <div class="jumbotron text-center">
        <h1>Bulli Travelers</h1>
        <p>Willkommen beim Bulli Blog!</p>
        <p><a class="btn btn-primary btn-lg" href="/lsapp/public/login" role="button">Login</a> <a class="btn btn-sucess btn-lg" href="/lsapp/public/register" role="button">Register</a></p>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>