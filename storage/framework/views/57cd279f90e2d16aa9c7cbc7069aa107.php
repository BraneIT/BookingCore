<div class="form-section">
    <h4 class="form-section-title"><?php echo e(__('Select Payment Method')); ?></h4>
    <div class="gateways-table accordion" id="accordionExample">
        <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">
                        <label class="" data-toggle="collapse" data-target="#gateway_<?php echo e($k); ?>" >
                            <input type="radio" name="payment_gateway" value="<?php echo e($k); ?>">
                            <?php if($logo = $gateway->getDisplayLogo()): ?>
                                <img src="<?php echo e($logo); ?>" alt="<?php echo e($gateway->getDisplayName()); ?>">
                            <?php endif; ?>
                            <?php echo e($gateway->getDisplayName()); ?>

                        </label>
                    </h4>
                </div>
                <div id="gateway_<?php echo e($k); ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="gateway_name">
                            <?php echo $gateway->getDisplayName(); ?>

                        </div>
                        <?php echo $gateway->getDisplayHtml(); ?>

                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /home/branislav/Downloads/codecanyon-pKneJWdu-booking-core-ultimate-booking-system/booking-core.3.6.2/Bookingcore.3.6.2/themes/BC/Booking/Views/frontend/booking/checkout-payment.blade.php ENDPATH**/ ?>