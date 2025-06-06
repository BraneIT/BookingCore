<div class="list-item">
    <div class="row">
        <?php if($rows->total() > 0): ?>
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $layout = $layout ?? setting_item("hotel_layout_item_search",'list') ?>
                <?php if($layout == "list"): ?>
                    <div class="col-lg-12 col-md-12">
                        <?php echo $__env->make('Hotel::frontend.layouts.search.loop-list', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </div>
                <?php else: ?>
                    <div class="col-lg-4 col-md-12">
                        <?php echo $__env->make('Hotel::frontend.layouts.search.loop-grid', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <div class="col-lg-12">
                <?php echo e(__("Hotel not found")); ?>

            </div>
        <?php endif; ?>
    </div>
</div>
<div class="bravo-pagination">
    <?php echo e($rows->appends(request()->except(['_ajax']))->links()); ?>

    <?php if($rows->total() > 0): ?>
        <span class="count-string"><?php echo e(__("Showing :from - :to of :total Hotels",["from"=>$rows->firstItem(),"to"=>$rows->lastItem(),"total"=>$rows->total()])); ?></span>
    <?php endif; ?>
</div>
<?php /**PATH /home/branislav/Downloads/codecanyon-pKneJWdu-booking-core-ultimate-booking-system/booking-core.3.6.2/Bookingcore.3.6.2/themes/BC/Hotel/Views/frontend/ajax/search-result.blade.php ENDPATH**/ ?>