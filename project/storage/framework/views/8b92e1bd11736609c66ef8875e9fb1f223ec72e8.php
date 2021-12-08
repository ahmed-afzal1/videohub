<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
          <div class="breadcrumb-page">
            <ul>
              <li><a href="#">Home</a></li>
              <li>Pricing</li>
            </ul>
          </div>
        </div>
    </div>
      <!-- breadcrumb area end here  -->

    <div class="pricing-page section-bottom">
      <div class="container">
        <div class="section-title-area text-center">
          <h2>Choose Your Best Plan</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit</p>
        </div>
        <div class="price-table">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">
                    <div class="table-header">
                      <p>Plan Catagories</p>
                    </div>
                  </th>
                  <th scope="col">
                    <div class="table-header">
                      <span>Monthly</span>
                      <p>Free Streaming for 7 days
                        on selected movies</p>
                    </div>
                  </th>
                  <th scope="col">
                    <div class="table-header">
                      <span>6 Month</span>
                      <p>Premium features for your growing business</p>
                    </div>
                  </th>
                  <th scope="col">
                    <div class="table-header">
                      <span>1 Years</span>
                      <p>Advanced features for scaling up your business</p>
                    </div>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="plan-time">
                      <p>Price</p>
                    </div>
                  </td>
                  <td>
                    <div class="plan-time">
                      <h2 class="price">$2</h2>
                      <a href="#" class="plan-btn">Choose Plan</a>
                    </div>
                  </td>
                  <td>
                    <div class="plan-time">
                      <h2 class="price">$10</h2>
                      <a href="#" class="plan-btn primary-btn">Choose Plan</a>
                    </div>
                  </td>
                  <td>
                    <div class="plan-time">
                      <h2 class="price">$18</h2>
                      <a href="#" class="plan-btn">Choose Plan</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="features" colspan="4">Features</td>
                </tr>
                <tr>
                  <td>Number of Screen</td>
                  <td><span>2</span></td>
                  <td><span>4</span></td>
                  <td><span>4</span></td>
                </tr>
                <tr>
                  <td>Free Content</td>
                  <td><i class="fas fa-check"></i></td>
                  <td><i class="fas fa-check"></i></td>
                  <td><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                  <td>All Paid Content</td>
                  <td><i class="fas fa-check"></i></td>
                  <td><i class="fas fa-check"></i></td>
                  <td><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                  <td>Watch on Laptop and TV</td>
                  <td><i class="fas fa-check"></i></td>
                  <td><i class="fas fa-check"></i></td>
                  <td><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                  <td>HD Available</td>
                  <td><i class="fas fa-check"></i></td>
                  <td><i class="fas fa-check"></i></td>
                  <td><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                  <td>Ultra HD Available</td>
                  <td><i class="fas fa-check"></i></td>
                  <td><i class="fas fa-check"></i></td>
                  <td><i class="fas fa-check"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\videohub\project\resources\views/front/plan.blade.php ENDPATH**/ ?>