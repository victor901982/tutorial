<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-3 pl-5 pt-4 pr-5">
          <img src="../img/logo.jpg" class="rounded-circle" height="75%" alt="" >
        </div>
        <div class="col-9 pt-5">
          <div class="d-flex justify-content-between align-items-baseline">
            <h1><?php echo e($user->username); ?></h1>
            <a href="">Add new Post</a>
          </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
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
        <div class="col-4">
          <img src="https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/e35/c0.124.1028.1028a/s320x320/123632957_2703456346533521_5750827485038359135_n.jpg?_nc_ht=scontent-atl3-2.cdninstagram.com&_nc_cat=105&_nc_ohc=vCUYtZatYnsAX-Z0w98&tp=16&oh=b80db16a1714986db2f1f14d2221688d&oe=5FD072BF" class="w-100" >
        </div>
        <div class="col-4">
          <img src="https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/e35/c105.0.617.617a/s320x320/123338414_158647252599659_2215011790784421160_n.jpg?_nc_ht=scontent-atl3-2.cdninstagram.com&_nc_cat=111&_nc_ohc=WsRDz6n3ykcAX_rNp-f&tp=16&oh=d4f675b2d0417a438b30aa2d9f3bc539&oe=5FCD6765" class="w-100" >
        </div>
        <div class="col-4">
          <img src="https://scontent-atl3-2.cdninstagram.com/v/t51.2885-15/e35/c1.0.826.826a/s320x320/123263397_2812074715706081_4550133809290864943_n.jpg?_nc_ht=scontent-atl3-2.cdninstagram.com&_nc_cat=105&_nc_ohc=uwlGpVKbkUoAX-2G-TR&tp=16&oh=30bcd51572d3b2435874bedbf1ee8cb5&oe=5FD07751" class="w-100" >
        </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Computer Support\Desktop\MyProject\resources\views/home.blade.php ENDPATH**/ ?>