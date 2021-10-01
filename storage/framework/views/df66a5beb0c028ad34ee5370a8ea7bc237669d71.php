

<?php $__env->startSection('content'); ?>
      <!-- Page Content -->
      <div class="page-heading header-text">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>Submit Ticket</h1>
            </div>
          </div>
        </div>
      </div>
  
      <div class="callback-form contact-us">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Make <em>Enquries</em></h2>
              </div>
            </div>

            <form action="<?php echo e(url('/post')); ?>" method="post">
              <?php echo e(csrf_field()); ?>

            <div class="col-md-12">
              <div class="contact-form">
                <form id="contact" action="" method="get">
                  <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                        <input name="user_name" name="user_name" class="form-control" id="name" placeholder="Full Name" required="">                      </fieldset>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                        <input name="phone" type="phone" class="form-control" id="phone" placeholder="Phone No" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                      <input name="address" name="address" class="form-control" id="address" placeholder="Home Address" required="">
                      </fieldset>
                     </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                      <input name="other" type="text" class="form-control" id="other" placeholder="Other Details" required="">
                      </fieldset>
                     </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="business" rows="6" class="form-control" id="business" placeholder="Your Business" required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="filled-button">Submit</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div id="map">
  
      <div class="partners contact-partners">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="owl-partners owl-carousel">
                <div class="partner-item">
                  <img src="assets/images/client-01.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('binary.master.master_div', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\post\resources\views/binary/pages/register.blade.php ENDPATH**/ ?>