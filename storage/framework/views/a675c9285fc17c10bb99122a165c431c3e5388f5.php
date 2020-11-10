<?php $__env->startSection('content'); ?>
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
      <?php echo csrf_field(); ?>
      <div class="row">
           <div class="col-8 offset-2">
             <div class="row">
                  <h1>Add new Post</h1>
               </div>
             <div class="form-group row">
                 <label for="caption" class="col-md-4 col-form-label">Post Caption</label>


                     <input id="caption" name="caption" type="text" class="form-control <?php $__errorArgs = ['caption'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('caption')); ?>" autocomplete="caption" autofocus>

                     <?php $__errorArgs = ['caption'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                         <span class="invalid-feedback" role="alert">
                             <strong><?php echo e($errors->first('caption')); ?></strong>
                         </span>
                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

             </div>
             <div class="row">
                 <label for="image" class="col-md-4 col-form-label">Post Image</label>
                 <input id="image" type="file" class="form-control-file" name="image">

                 <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                         <strong><?php echo e($errors->first('image')); ?></strong>
                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="row pt-4">
                <button class="btn btn-primary">Add new Post</button>
            </div>
          </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Computer Support\Desktop\MyProject\resources\views/posts/create.blade.php ENDPATH**/ ?>