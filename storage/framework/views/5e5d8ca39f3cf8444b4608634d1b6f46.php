
<?php $__env->startSection('content'); ?>
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
      <div class="col-sm-12 col-xl-6">
          <div class="bg-light rounded h-100 p-4">
              <h6 class="mb-4">Testimonil</h6>
              <form method="#" action="#">
                <?php echo e(csrf_field()); ?>

                 <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label"> Name:</label>
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
                  <label for="formFile" class="form-label">Client Images:</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Profession:</label>
                  <input type="text" name="profession" value="<?php echo e(old('profession')); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <?php $__errorArgs = ['profession'];
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
                  <label for="exampleInputEmail1" class="form-label">Country:</label>
                  <input type="text" name="country" value="<?php echo e(old('country')); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <?php $__errorArgs = ['country'];
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
                  <label for="exampleInputEmail1" class="form-label">Dilog:</label>
                  <textarea name="dilog" class="form-control" aria-label="With textarea"></textarea>
                  <?php $__errorArgs = ['dilog'];
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
                      <th scope="col">Date</th>
                      <th scope="col">Subject</th>
                      <th scope="col">Institute</th>
                      <th scope="col">Session start</th>
                      <th scope="col">Session Complete</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>01 Jan 2045</td>
                      <td>Bsc in ETE</td>
                      <td>Daffodil University</td>
                      <td>01 jan 2012</td>
                      <td>16 jan 2012</td>
                      <td>complete</td>
                      <td>
                        <a class="btn btn-sm btn-primary" href="">Edith</a>
                        <a class="btn btn-sm btn-primary" href="">Delete</a>
                      </td>
                  </tr>
                  <tr>
                      <td>01 Jan 2045</td>
                      <td>Bsc in ETE</td>
                      <td>Daffodil University</td>
                      <td>01 jan 2012</td>
                      <td>16 jan 2012</td>
                      <td>complete</td>
                      <td>
                        <a class="btn btn-sm btn-primary" href="">Edith</a>
                        <a class="btn btn-sm btn-primary" href="">Delete</a>
                      </td>
                  </tr>
                  <tr>
                    <td>01 Jan 2045</td>
                    <td>Bsc in ETE</td>
                    <td>Daffodil University</td>
                    <td>01 jan 2012</td>
                    <td>16 jan 2012</td>
                    <td>complete</td>
                    <td>
                      <a class="btn btn-sm btn-primary" href="">Edith</a>
                      <a class="btn btn-sm btn-primary" href="">Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <td>01 Jan 2045</td>
                    <td>Bsc in ETE</td>
                    <td>Daffodil University</td>
                    <td>01 jan 2012</td>
                    <td>16 jan 2012</td>
                    <td>complete</td>
                    <td>
                      <a class="btn btn-sm btn-primary" href="">Edith</a>
                      <a class="btn btn-sm btn-primary" href="">Delete</a>
                    </td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
</div>

<div style="padding-bottom: 400px"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Apache24\htdocs\laravelapp.me\resources\views/Admin/testimonil.blade.php ENDPATH**/ ?>