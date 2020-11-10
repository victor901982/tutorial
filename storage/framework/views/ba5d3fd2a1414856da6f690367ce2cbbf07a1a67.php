<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-3 pl-5 pt-4 pr-5">
          <img src="../img/logo.jpg" class="rounded-circle" height="75%" alt="" >
        </div>
        <div class="col-9 pt-5">
          <div class="d-flex justify-content-between align-items-">
            <h1><?php echo e($user->username); ?></h1>
            <a href="/p/create">Add new Post</a>
          </div>
            <div class="d-flex">
                <div class="pr-5"><strong><?php echo e($user->posts->count()); ?></strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-3">
                <div><strong><?php echo e($user->profile->title); ?></strong></div>
                <div><?php echo e($user->profile->description); ?></div>
                <div><a href="#"><?php echo e($user->profile->url); ?></a></div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-4">
          <img src="/storage/<?php echo e($post -> image); ?>" class="w-100" >
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Computer Support\Desktop\MyProject\resources\views/profiles/index.blade.php ENDPATH**/ ?>