
<?php $__env->startSection('content'); ?>
<style type="text/css">
  body{background:#f5f5f5}
  .text-white-50 { color: rgba(255, 255, 255, .5); }
  .bg-blue { background-color:#00b5ec; }
  .border-bottom { border-bottom: 1px solid #e5e5e5; }
  .box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
</style>
<main role="main" class="container bootdey.com">
  <div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
    <?php $__currentLoopData = $query; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="media text-muted pt-3">
      <img src="<?php echo e(url('img/avatar7.png')); ?>" alt class="mr-2 rounded" width="32" height="32">
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
      <strong class="d-block text-gray-dark">@ <?php echo e($item->name); ?> # <?php echo e($item->subject); ?> Date: <i><?php echo e($item->time); ?></i></strong>
      <strong class="d-block text-gray-dark">Email: <?php echo e($item->email); ?></strong>
       <?php echo e($item->content); ?>

      </p>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <small class="d-block text-right mt-3">
  <a>All messages</a>
  </small>
  </div>
</main>

<div style="padding-bottom: 400px"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Apache24\htdocs\laravelapp.me\resources\views/admin/message.blade.php ENDPATH**/ ?>