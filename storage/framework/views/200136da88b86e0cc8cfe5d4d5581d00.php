
<?php $__env->startSection('content'); ?>
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
      <div class="col-sm-12 col-xl-6">
          <div class="bg-light rounded h-100 p-4">
              <h6 class="mb-4">Add Servises</h6>
              <form method="POST" action=" <?php echo e(url('/insert/servises')); ?> ">
                <?php echo e(csrf_field()); ?>

                 <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label"> Servises Name:</label>
                  <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control" id="examplepassword" aria-describedby="emailHelp">
                  <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p id="emailHelp" class="form-text"><?php echo e($message); ?></p>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Start Form:</label>
                  <input type="number" name="price" value="<?php echo e(old('price')); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p id="emailHelp" class="form-text"><?php echo e($message); ?></p>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">What are you provide this servises:</label>
                  <textarea name="institute" class="form-control" aria-label="With textarea"></textarea>
                  <?php $__errorArgs = ['institute'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <p id="emailHelp" class="form-text"><?php echo e($message); ?></p>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                  <input type="submit" value="submit" class="btn btn-primary" value="Create">
                  <div class="mb-3">
                    <?php $__errorArgs = ['errorAll'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p id="emailHelp" class="form-text"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
<div class="container-fluid pt-4 px-4">
  <div class="bg-light text-center rounded p-4">
      <div class="d-flex align-items-center justify-content-between mb-4">
          <h6 class="mb-0">All Subject You Complete</h6>
          <a href="">Show All</a>
      </div>
      <div class="table-responsive">
          <table class="table text-start align-middle table-bordered table-hover mb-0">
              <thead>
                  <tr class="text-dark">
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">About</th>
                    <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                  
                <?php $__currentLoopData = $query; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($item->name); ?></td>
                  <td><?php echo e($item->price); ?></td>
                  <td><?php echo e($item->comments); ?></td>
                  <td>
                    <button class="btn btn-sm btn-primary" id="click" data-id="<?php echo e($item->sl); ?>" data-type="edu">Delete</button>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
      </div>
  </div>
</div>

<div style="padding-bottom: 400px"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Apache24\htdocs\laravelapp.me\resources\views/Admin/servises.blade.php ENDPATH**/ ?>