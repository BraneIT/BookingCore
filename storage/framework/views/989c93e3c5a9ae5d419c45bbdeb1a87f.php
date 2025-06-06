<?php
$vendor = $row->author;
?>
<?php if(!empty($vendor->id)): ?>
<div class="owner-info widget-box">
    <div class="media">
        <div class="media-left">
            <a href="<?php echo e(route('user.profile',['id'=>$vendor->user_name ?? $vendor->id])); ?>" class="avatar-cover" style="background-image: url('<?php echo e($vendor->getAvatarUrl()); ?>')" >
            </a>
        </div>
        <div class="media-body">
            <h4 class="media-heading"><a class="author-link" href="<?php echo e(route('user.profile',['id'=>$vendor->user_name ?? $vendor->id])); ?>"><?php echo e($vendor->getDisplayName()); ?></a>
                <?php if($vendor->is_verified): ?>
                    <img data-toggle="tooltip" data-placement="top" src="<?php echo e(asset('icon/ico-vefified-1.svg')); ?>" title="<?php echo e(__("Verified")); ?>" alt="<?php echo e(__("Verified")); ?>">
                <?php else: ?>
                    <img data-toggle="tooltip" data-placement="top" src="<?php echo e(asset('icon/ico-not-vefified-1.svg')); ?>" title="<?php echo e(__("Not verified")); ?>" alt="<?php echo e(__("Verified")); ?>">
                <?php endif; ?>
            </h4>
            <p><?php echo e(__("Member Since :time",["time"=> date("M Y",strtotime($vendor->created_at))])); ?></p>
            <?php if((!Auth::check() or Auth::id() != $row->author_id ) and setting_item('inbox_enable')): ?>
                <a class="btn bc_start_chat" href="<?php echo e(route('user.chat',['user_id'=>$row->author_id])); ?>" ><i class="icon ion-ios-chatboxes"></i> <?php echo e(__('Message host')); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>
<?php /**PATH /home/branislav/Downloads/codecanyon-pKneJWdu-booking-core-ultimate-booking-system/booking-core.3.6.2/Bookingcore.3.6.2/themes/BC/Tour/Views/frontend/layouts/details/vendor.blade.php ENDPATH**/ ?>