<div class="bravo-call-to-action <?php echo e($style); ?>">
    <?php switch($style):
        case ("style_2"): ?>
            <?php echo $__env->make("Template::frontend.blocks.call-to-action.style-2", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php break; ?>
        <?php case ("style_3"): ?>
            <?php echo $__env->make("Template::frontend.blocks.call-to-action.style-3", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php break; ?>
        <?php default: ?>
            <?php echo $__env->make("Template::frontend.blocks.call-to-action.style-normal", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endswitch; ?>
</div>
<?php /**PATH /home/branislav/Downloads/codecanyon-pKneJWdu-booking-core-ultimate-booking-system/booking-core.3.6.2/Bookingcore.3.6.2/themes/Base/Template/Views/frontend/blocks/call-to-action/index.blade.php ENDPATH**/ ?>