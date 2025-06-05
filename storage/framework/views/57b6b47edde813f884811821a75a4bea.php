<div class="bravo-list-tour <?php echo e($style_list); ?>">
    <?php if(in_array($style_list,['normal','carousel','box_shadow'])): ?>
        <?php echo $__env->make("Tour::frontend.blocks.list-tour.style-normal", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>
    <?php if($style_list == "carousel_simple"): ?>
        <?php echo $__env->make("Tour::frontend.blocks.list-tour.style-carousel-simple", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>
</div><?php /**PATH /home/branislav/Downloads/codecanyon-pKneJWdu-booking-core-ultimate-booking-system/booking-core.3.6.2/Bookingcore.3.6.2/themes/BC/Tour/Views/frontend/blocks/list-tour/index.blade.php ENDPATH**/ ?>