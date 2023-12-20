<div class="sidebar pe-4 pb-3">
  <nav class="navbar bg-light navbar-light">
      <a href="index.html" class="navbar-brand mx-4 mb-3">
          <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Admin</h3>
      </a>
      <div class="d-flex align-items-center ms-4 mb-4">
          <div class="position-relative">
              <img class="rounded-circle" src="<?php echo e(url('img/user.jpg')); ?>" alt="" style="width: 40px; height: 40px;">
              <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
          </div>
          <div class="ms-3">
              <h6 class="mb-0">Jhon Doe</h6>
              <span>Admin</span>
          </div>
      </div>
      <div class="navbar-nav w-100">
          <a href=" <?php echo e(url('/dashbord')); ?> " class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
          <div class="nav-item dropdown">
              <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-clipboard-user me-2"></i>User</div>
              <div class="dropdown-menu bg-transparent border-0">
                  <a href="<?php echo e(url('/userlist')); ?>" class="dropdown-item">List</a>
                  <a href="<?php echo e(url('/createuser')); ?> " class="dropdown-item">Create</a>
              </div>
          </div>
          <div class="nav-item dropdown">
              <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-solid fa-gear me-2"></i>Settings</div>
              <div class="dropdown-menu bg-transparent border-0">
                  <a href=" <?php echo e(url('/settings/basic')); ?> " class="dropdown-item">Basic</a>
                  <a href=" <?php echo e(url('/settings/uploadcv')); ?> " class="dropdown-item">Upload CV</a>
                  <a href=" <?php echo e(url('/settings/education')); ?> " class="dropdown-item">Education</a>
                  <a href="<?php echo e(url('/settings/experience')); ?> " class="dropdown-item">Expereance</a>
                  <a href=" <?php echo e(url('/settings/address')); ?> " class="dropdown-item">Address</a>
                  <a href=" <?php echo e(url('/settings/socile')); ?> " class="dropdown-item">Socile Link</a>
                  <a href=" <?php echo e(url('/settings/testimonil')); ?> " class="dropdown-item">Testimonil</a>
                  <a href=" <?php echo e(url('/settings/cvimages')); ?> " class="dropdown-item">CV Images</a>
                  <a href=" <?php echo e(url('/settings/profileimg')); ?> " class="dropdown-item">Profile Images</a>
              </div>
          </div>
          <a href="<?php echo e(url('/settings/servises')); ?>" class="nav-item nav-link"><i class="fa-solid fa-book me-2"></i>Servises</a>
          <a href="<?php echo e(url('/logout')); ?>" class="nav-item nav-link"><i class="fa-solid fa-arrow-right-from-bracket me-2"></i></i>Log Out</a>
      </div>
  </nav>
</div><?php /**PATH C:\Apache24\htdocs\laravelapp.me\resources\views/layouts/_ad_sidbar.blade.php ENDPATH**/ ?>