<div class="row">
    <div class="col-lg-3 col-md-12">
        <?php echo $__env->make('Hotel::frontend.layouts.search.filter-search', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
    <div class="col-lg-9 col-md-12">
        <div class="bravo-list-item">
            <div class="topbar-search">
                <h2 class="text result-count">
                    <?php if($rows->total() > 1): ?>
                        <?php echo e(__(":count hotels found",['count'=>$rows->total()])); ?>

                    <?php else: ?>
                        <?php echo e(__(":count hotel found",['count'=>$rows->total()])); ?>

                    <?php endif; ?>
                </h2>
                <div class="control bc-form-order">
                    <?php echo $__env->make('Layout::global.search.orderby',['routeName'=>'hotel.search'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
            </div>
            <div class="ajax-search-result">
                <?php echo $__env->make('Hotel::frontend.ajax.search-result', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/branislav/Downloads/codecanyon-pKneJWdu-booking-core-ultimate-booking-system/booking-core.3.6.2/Bookingcore.3.6.2/themes/BC/Hotel/Views/frontend/layouts/search/list-item.blade.php ENDPATH**/ ?>