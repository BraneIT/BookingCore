<?php if(!empty($location_category) and !empty($translation->surrounding)): ?>
	<div class="g-surrounding">
		<div class="location-title">
			<h3 class="mb-4"><?php echo e(__("What's Nearby")); ?></h3>
			<?php $__currentLoopData = $location_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!empty($translation->surrounding[$category->id])): ?>
				    <h6 class="font-weight-bold mb-3"><i class="<?php echo e(clean($category->icon_class)); ?> "></i> <?php echo e($category->location_category_translations->name??$category->name); ?></h6>
					<?php $__currentLoopData = $translation->surrounding[$category->id]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="row mb-3">
							<div class="col-lg-4"><?php echo e($item['name']); ?> (<?php echo e($item['value']); ?><?php echo e($item['type']); ?>)</div>
							<div class="col-lg-8"><?php echo e($item['content']); ?></div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
	<div class="bravo-hr"></div>
<?php endif; ?>
<?php /**PATH /home/branislav/Downloads/codecanyon-pKneJWdu-booking-core-ultimate-booking-system/booking-core.3.6.2/Bookingcore.3.6.2/themes/BC/Hotel/Views/frontend/layouts/details/hotel-surrounding.blade.php ENDPATH**/ ?>