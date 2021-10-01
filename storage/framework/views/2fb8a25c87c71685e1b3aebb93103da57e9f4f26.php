

<?php $__env->startSection('content'); ?>
      <!-- Page Content -->
      <div class="page-heading header-text">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>Register With Us</h1>
              <span>Passive income investment Grant for Youths</span>
            </div>
          </div>
        </div>
      </div>
      <div class="services">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2><em>WIN N100,000.00</em></h2><br>
          <h2>ELIGIBILITY</h2><br>
          <span>Any Business that deals with crop farming, livestock farming, fishery will not be considered.</span>
          <p><em>Business of Interest:</em><br>
            Preprocessing of farm produce (dry, cool, grind, preserve, ferment, filter, package, etc.)<br>
            Providing Services (Product delivery and logistics, laundry services, cooking and baking services, carpentry services, any type of repair services, DJs, Makeup artists, digital marketing etc.)<br>
            Production (shoes, cloths, furniture, packaged goods, cosmetics, skin and lather production etc.)<br>
            Sells (food, ice block, drinks, cloths, merchandise etc.)<br>
            Investments (Crypto currency, Forex, Shears, partnering with existing businesses for periodic dividends etc.)<p>
        </div>
      </div>
    </div>
  </div>
</div>

      <div class="callback-form contact-us">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Enter Your <em>Details</em></h2>
              </div>
            </div>

            <form action="<?php echo e(url('/register')); ?>" method="post">
              <?php echo e(csrf_field()); ?>

            <div class="col-md-12">
              <div class="contact-form">
                <form id="contact" action="" method="get">
                  <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                        <input name="user_name" name="user_name" class="form-control" id="name" placeholder="Full Name" required="">
                      </fieldset>
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
                      <input name="account" name="account" class="form-control" id="account" placeholder="Account Number" required="">
                      </fieldset>
                     </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                      <input name="bank" type="text" class="form-control" id="bank" placeholder="Bank Name" required="">
                      </fieldset>
                     </div>
                    <div class="col-lg-4 col-md-12 col-md-12">
                      <fieldset>
                        <select name="category" rows="6" class="form-control" id="category" placeholder="Category" required=""></>
                        <option value="Technology/Innovation">Technology/Innovation</option>
                        <option value="Agriculture and related value chain">Agriculture and related value chain</option>
                        <option value="Manufacturing">Manufacturing</option>
                        <option value="Hospitality/ Tourism">Hospitality/ Tourism</option>
                        <option value="Construction">Construction</option>
                        <option value="Logistics and Supply chain">Logistics and Supply chain</option>
                        <option value="Healthcare value chain">Healthcare value chain</option>
                        <option value="Creative Sector">Creative Sector</option>
                        <option value="Trading and Services">Trading and Services</option>
                        <option value="Others">Others</option>
                        </select>
                      </fieldset>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                      <input name="business" name="business" class="form-control" id="business" placeholder="Type of Business/Investment" required="">
                      </fieldset>
                     </div>
                     <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                      <textarea name="explain" name="explain" class="form-control" id="explain" placeholder="Explain your Business/Investment" required=""></textarea>
                      </fieldset>
                     </div>
                     <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                      <textarea name="period" name="period" class="form-control" id="period" placeholder="How long have you studied or have been in the business?" required=""></textarea>
                      </fieldset>
                     </div>
                     <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                      <textarea name="need" name="need" class="form-control" id="need" placeholder="Your need for this grant (Expansion, Equipment, Refinancing, advertising, investment, capital)" required=""></textarea>
                      </fieldset>
                     </div>
                     <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                      <textarea name="analysis" name="analysis" class="form-control" id="analysis" placeholder="Did you carry out a market analysis on this business/ investment?" required=""></textarea>
                      </fieldset>
                     </div>
                     <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                      <textarea name="yes" name="yes" class="form-control" id="yes" placeholder="If yes, how did you do it?" required=""></textarea>
                      </fieldset>
                     </div>
                     <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                      <textarea name="target" name="target" class="form-control" id="target" placeholder="Who are your target clients? (if it applies to your business, if not, do not fill)" required=""></textarea>
                      </fieldset>
                     </div>
                     <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                      <textarea name="competition" name="competition" class="form-control" id="competition" placeholder="Who/what is your competition? " required=""></textarea>
                      </fieldset>
                     </div>
                     <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                      <textarea name="obsatcle" name="obsatcle" class="form-control" id="obsatcle" placeholder="What is your biggest obstacle?" required=""></textarea>
                      </fieldset>
                     </div>
                     <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                      <textarea name="strategy" name="strategy" class="form-control" id="strategy" placeholder="What is your marketing strategy? (in …… words)" required=""></textarea>
                      </fieldset>
                     </div>
                     <div class="col-lg-4 col-md-12 col-sm-12">
                      <fieldset>
                      <textarea name="grant" name="grant" class="form-control" id="grant" placeholder="How do you plan to use this grant, if you win? (provide a detailed breakdown for expenditure and dividend shearing) (in…… words)" required=""></textarea>
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
<?php echo $__env->make('binary.master.master_div', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Khalil\Desktop\Apex\resources\views/binary/pages/register.blade.php ENDPATH**/ ?>