
<?php $__env->startSection('content'); ?>
    <?php if($row->template_id): ?>
        <div class="page-template-content">
            <?php echo $row->getProcessedContent(); ?>

        </div>
    <?php else: ?>
        <div class="container " style="padding-top: 40px;padding-bottom: 40px;">
            <h1><?php echo clean($translation->title); ?></h1>
            <div class="blog-content">
                <?php echo $translation->content; ?>

            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/branislav/Downloads/codecanyon-pKneJWdu-booking-core-ultimate-booking-system/booking-core.3.6.2/Bookingcore.3.6.2/themes/Base/Page/Views/frontend/detail.blade.php ENDPATH**/ ?>