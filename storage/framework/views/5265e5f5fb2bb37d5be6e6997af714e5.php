<?php
    $translation = $row->translate();
?>
<div class="item-loop item-loop-wrap <?php echo e($wrap_class ?? ''); ?>">
    <?php if($row->is_featured == "1"): ?>
        <div class="featured">
            <?php echo e(__("Featured")); ?>

        </div>
    <?php endif; ?>
    <div class="thumb-image ">
        <a <?php if(!empty($blank)): ?> target="_blank" <?php endif; ?> href="<?php echo e($row->getDetailUrl($include_param ?? true)); ?>">
            <?php if($row->image_url): ?>
                <?php if(!empty($disable_lazyload)): ?>
                    <img src="<?php echo e($row->image_url); ?>" class="img-responsive" alt="">
                <?php else: ?>
                    <?php echo get_image_tag($row->image_id,'medium',['class'=>'img-responsive','alt'=>$row->title]); ?>

                <?php endif; ?>
            <?php endif; ?>
        </a>
        <div class="service-wishlist <?php echo e($row->isWishList()); ?>" data-id="<?php echo e($row->id); ?>" data-type="<?php echo e($row->type); ?>">
            <i class="fa fa-heart-o"></i>
        </div>
    </div>
    <div class="location">
        <?php if(!empty($row->location->name)): ?>
            <?php $location =  $row->location->translate() ?>
            <?php echo e($location->name ?? ''); ?>

        <?php endif; ?>
    </div>
    <div class="item-title">
        <a <?php if(!empty($blank)): ?> target="_blank" <?php endif; ?> href="<?php echo e($row->getDetailUrl($include_param ?? true)); ?>">
            <?php if($row->is_instant): ?>
                <i class="fa fa-bolt d-none"></i>
            <?php endif; ?>
                <?php echo e($translation->title); ?>

        </a>
    </div>
        <?php if(setting_item('boat_enable_review')): ?>
            <?php
            $reviewData = $row->getScoreReview();
            $score_total = $reviewData['score_total'];
            ?>
            <div class="service-review">
                <span class="rate">
                    <?php if($reviewData['total_review'] > 0): ?> <?php echo e($score_total); ?>/5 <?php endif; ?> <span class="rate-text"><?php echo e($reviewData['review_text']); ?></span>
                </span>
                <span class="review">
                 <?php if($reviewData['total_review'] > 1): ?>
                        <?php echo e(__(":number Reviews",["number"=>$reviewData['total_review'] ])); ?>

                    <?php else: ?>
                        <?php echo e(__(":number Review",["number"=>$reviewData['total_review'] ])); ?>

                    <?php endif; ?>
                </span>
            </div>
        <?php endif; ?>
    <div class="amenities">
        <?php if($row->max_guest): ?>
            <span class="amenity total" data-toggle="tooltip"  title="<?php echo e(__("Max Guests")); ?>">
                <i class="icofont-ui-user-group input-icon field-icon"></i>
                <span class="text">
                    <?php echo e($row->max_guest); ?>

                </span>
            </span>
        <?php endif; ?>
        <?php if($row->cabin): ?>
            <span class="amenity bed" data-toggle="tooltip" title="<?php echo e(__("Cabin")); ?>">
                <i class="input-icon field-icon icofont-sail-boat-alt-2"></i>
                <span class="text">
                    <?php echo e($row->cabin); ?>

                </span>
            </span>
        <?php endif; ?>
        <?php if($row->length): ?>
            <span class="amenity bath" data-toggle="tooltip" title="<?php echo e(__("Length Boat")); ?>" >
                <i class="input-icon field-icon icofont-yacht"></i>
                <span class="text">
                    <?php echo e($row->length); ?>

                </span>
            </span>
        <?php endif; ?>
        <?php if($row->speed): ?>
            <span class="amenity size" data-toggle="tooltip" title="<?php echo e(__("Speed")); ?>" >
                <i class="input-icon field-icon icofont-speed-meter"></i>
                <span class="text">
                    <?php echo e($row->speed); ?>

                </span>
            </span>
        <?php endif; ?>
    </div>
    <div class="info">
        <div class="g-price">
            <div class="prefix">
                <span class="fr_text"><?php echo e(__("from")); ?></span>
            </div>
            <div class="price">
                <span class="text-price"><?php echo e(format_money($row->min_price)); ?></span>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/branislav/Downloads/codecanyon-pKneJWdu-booking-core-ultimate-booking-system/booking-core.3.6.2/Bookingcore.3.6.2/themes/BC/Boat/Views/frontend/layouts/search/loop-grid.blade.php ENDPATH**/ ?>