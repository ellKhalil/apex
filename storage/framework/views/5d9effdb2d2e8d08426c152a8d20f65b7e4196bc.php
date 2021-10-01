

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>"/>
      <!-- Page Content -->
      <div class="page-heading header-text">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>Our Data</h1>
            </div>
          </div>
        </div>
      </div>



<form action="/welcome" method="POST" role="search">
  <?php echo e(csrf_field()); ?>

  <div class="input-group">
      <input type="text" class="form-control" id="q"
          placeholder="Search users"> <span class="input-group-btn">
          <button type="submit" class="btn btn-default">
              <span class="glyphicon glyphicon-search"></span>
          </button>
      </span>
  </div>
</form>
<div class="w3-container">
<table class="center">
<tbody>
    <tr>
      <th>S/N</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Address</th>
      <th>Business</th>
      <th>Other</th>
    </tr>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($value->id); ?></td>
      <td><?php echo e($value->name); ?></</td>
      <td><?php echo e($value->email); ?></</td>
      <td><?php echo e($value->phone); ?></</td>
      <td><?php echo e($value->address); ?></</td>
      <td><?php echo e($value->business); ?></</td>
      <td><?php echo e($value->other); ?></</td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
	</table>

  
  <?php $__env->stopSection(); ?>


<?php echo $__env->make('binary.master.master_div', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\post\resources\views/binary/pages/ignition.blade.php ENDPATH**/ ?>