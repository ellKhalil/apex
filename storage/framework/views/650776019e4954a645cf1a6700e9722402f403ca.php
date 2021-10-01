

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>"/>
      <!-- Page Content -->
      <div class="page-heading header-text">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3>This is an initiative powered by Apex Consulting , designed to empower business start-ups, small and medium scale enterprises and the Nigerian youths with grants to help achieve the federal government Sustainable Development Goals.</h3>
              <p> </p>
            </div>
          </div>
        </div>
      </div>
      <div class="services">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
        <h2>How to participate in the Competition</h2><br>
        <p>Click on the register button<br>
                  Fill the registration form with the correct response.<br>
                  Agree to the terms and conditions of the competition.<br>
                  A unique ignition number will be generated for you (make sure you save the number).<br>
                  Use that unique number to pay the #500.00 entry fee.<br>
                  After payment, go to “Check status” page.<br>
                  Input your ignition number and observe your progress.<br>
                  Winners of this grant will be contacted via their mobile phones and emails.<br>
                  All participants of this competition will be provided with electronic resources for business plan, marketing, business management and social media marketing.</br>
                  Overall understanding in running and managing selected business/ investment.<p>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="services">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>VETTING <em>PROCESS</em></h2><br>
          <span>Neoaltus Ltd will consider the following when picking the winners of this competition:</span>
          <p>Flow in explanation<br>
              Use of subject matter business terms.<br> 
              Clarity in explanation.<br>
              Understanding of selected business/investment.<br>
              Understanding the clientele.<br>
              Convincing marketing strategy.<br>
              Realistic cost evaluations and profit estimations.<br> 
              Overall understanding in running and managing selected business/ investment.<p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-heading" class="centre" class="col-md-12">
<h2><em>Check Status</em></h2>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Insert Ignition code:" title="search">
<div class="w3-container">
  <table class="center" id="myTable">
    <tbody>
      <tr>
        <th>S/N</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Account No</th>
        <th>Bank</th>
        <th>Category</th>
        <th>Target</th>
        <th>Business</th>
        <th>Period</th>
        <th>Need</th>
        <th>Analysis</th>
        <th>If Yes</th>
        <th>Competition</th>
        <th>Obsatcle</th>
        <th>Strategy</th>
        <th>Grant</th>
      </tr>
      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($value->id); ?></td>
          <td><?php echo e($value->name); ?></</td>
          <td><?php echo e($value->title); ?></</td>
          <td><?php echo e($value->phone); ?></</td>
          <td><?php echo e($value->body); ?></</td>
          <td><?php echo e($value->bank); ?></</td>
          <td><?php echo e($value->category); ?></</td>
          <td><?php echo e($value->address); ?></</td>
          <td><?php echo e($value->business); ?></</td>
          <td><?php echo e($value->period); ?></</td>
          <td><?php echo e($value->need); ?></</td>
          <td><?php echo e($value->analysis); ?></</td>
          <td><?php echo e($value->yes); ?></</td>
          <td><?php echo e($value->competition); ?></</td>
          <td><?php echo e($value->obsatcle); ?></</td>
          <td><?php echo e($value->strategy); ?></</td>
          <td><?php echo e($value->grant); ?></</td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>

  
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('binary.master.master_div', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Khalil\Desktop\Apex\resources\views/binary/pages/ignition.blade.php ENDPATH**/ ?>