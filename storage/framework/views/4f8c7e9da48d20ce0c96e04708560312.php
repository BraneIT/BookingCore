<?php if(!is_api()): ?>
	<div class="bravo_footer">
		<div class="mailchimp">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-lg-10 col-lg-offset-1">
						<div class="row">
							<div class="col-xs-12  col-md-7 col-lg-6">
								<div class="media ">
									<div class="media-left hidden-xs">
										<i class="icofont-island-alt"></i>
									</div>
									<div class="media-body">
										<h4 class="media-heading"><?php echo e(__("Get Updates & More")); ?></h4>
										<p><?php echo e(__("Thoughtful thoughts to your inbox")); ?></p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-md-5 col-lg-6">
								<form action="<?php echo e(route('newsletter.subscribe')); ?>" class="subcribe-form bravo-subscribe-form bravo-form">
									<?php echo csrf_field(); ?>
									<div class="form-group">
										<input type="text" name="email" class="form-control email-input" placeholder="<?php echo e(__('Your Email')); ?>">
										<button type="submit" class="btn-submit"><?php echo e(__('Subscribe')); ?>

											<i class="fa fa-spinner fa-pulse fa-fw"></i>
										</button>
									</div>
									<div class="form-mess"></div>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-footer">
			<div class="container">
				<div class="row">
					<?php if($list_widget_footers = setting_item_with_lang("list_widget_footer")): ?>
                        <?php $list_widget_footers = json_decode($list_widget_footers); ?>
						<?php $__currentLoopData = $list_widget_footers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-lg-<?php echo e($item->size ?? '3'); ?> col-md-6">
								<div class="nav-footer">
									<div class="title">
										<?php echo e($item->title); ?>

									</div>
									<div class="context">
										<?php echo $item->content; ?>

									</div>
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="copy-right">
			<div class="container context">
				<div class="row">
					<div class="col-md-12">
						<?php echo clean(setting_item_with_lang("footer_text_left")); ?>

						<div class="f-visa">
							<?php echo clean(setting_item_with_lang("footer_text_right")); ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php echo $__env->make('Layout::parts.login-register-modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('Popup::frontend.popup', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php if(Auth::check() and !empty($is_user_page)): ?>
	<?php echo $__env->make('Media::browser', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>
<link rel="stylesheet" href="<?php echo e(asset('libs/flags/css/flag-icon.min.css')); ?>">

<?php echo \App\Helpers\Assets::css(true); ?>



<script src="<?php echo e(asset('libs/lazy-load/intersection-observer.js')); ?>"></script>
<script async src="<?php echo e(asset('libs/lazy-load/lazyload.min.js')); ?>"></script>
<script>
    // Set the options to make LazyLoad self-initialize
    window.lazyLoadOptions = {
        elements_selector: ".lazy",
        // ... more custom settings?
    };

    // Listen to the initialization event and get the instance of LazyLoad
    window.addEventListener('LazyLoad::Initialized', function (event) {
        window.lazyLoadInstance = event.detail.instance;
    }, false);


</script>
<script src="<?php echo e(asset('libs/lodash.min.js')); ?>"></script>
<script src="<?php echo e(asset('libs/jquery-3.6.3.min.js')); ?>"></script>
<script src="<?php echo e(asset('libs/vue/vue'.(!env('APP_DEBUG') ? '.min':'').'.js')); ?>"></script>
<script src="<?php echo e(asset('libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('libs/bootbox/bootbox.min.js')); ?>"></script>
<?php if(Auth::check() and !empty($is_user_page)): ?>
	<script src="<?php echo e(asset('module/media/js/browser.js?_ver='.config('app.asset_version'))); ?>"></script>
<?php endif; ?>
<script src="<?php echo e(asset('libs/carousel-2/owl.carousel.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset("libs/daterange/moment.min.js")); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset("libs/daterange/daterangepicker.min.js")); ?>"></script>
<script src="<?php echo e(asset('libs/select2/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/functions.js?_ver='.config('app.asset_version'))); ?>"></script>

<?php if(
    setting_item('tour_location_search_style')=='autocompletePlace' || setting_item('hotel_location_search_style')=='autocompletePlace' || setting_item('car_location_search_style')=='autocompletePlace' || setting_item('space_location_search_style')=='autocompletePlace' || setting_item('hotel_location_search_style')=='autocompletePlace' || setting_item('event_location_search_style')=='autocompletePlace'
): ?>
	<?php echo App\Helpers\MapEngine::scripts(); ?>

<?php endif; ?>
<script src="<?php echo e(asset('libs/pusher.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/home.js?_ver='.config('app.asset_version'))); ?>"></script>

<?php if(!empty($is_user_page)): ?>
	<script src="<?php echo e(asset('module/user/js/user.js?_ver='.config('app.asset_version'))); ?>"></script>
<?php endif; ?>
<?php if(setting_item('cookie_agreement_type')=='cookie_agreement'): ?>
    and request()->cookie('booking_cookie_agreement_enable') !=1 and !is_api()  and !isset($_COOKIE['booking_cookie_agreement_enable']))
	<div class="booking_cookie_agreement p-3 d-flex fixed-bottom">
		<div class="content-cookie"><?php echo clean(setting_item_with_lang('cookie_agreement_content')); ?></div>
		<button class="btn save-cookie"><?php echo clean(setting_item_with_lang('cookie_agreement_button_text')); ?></button>
	</div>
	<script>
        var save_cookie_url = '<?php echo e(route('core.cookie.check')); ?>';
	</script>
	<script src="<?php echo e(asset('js/cookie.js?_ver='.config('app.asset_version'))); ?>"></script>
<?php endif; ?>

<?php echo $__env->renderWhen(setting_item('cookie_agreement_type')=='cookie_consent','Layout::parts.cookie-consent-init', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1])); ?>

<?php if(setting_item('user_enable_2fa')): ?>
    <?php echo $__env->make('auth.confirm-password-modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <script src="<?php echo e(asset('/module/user/js/2fa.js')); ?>"></script>
<?php endif; ?>

<?php echo \App\Helpers\Assets::js(true); ?>


<?php \App\Helpers\ReCaptchaEngine::scripts() ?>

<?php echo $__env->yieldPushContent('js'); ?>
<?php /**PATH /home/branislav/Downloads/codecanyon-pKneJWdu-booking-core-ultimate-booking-system/booking-core.3.6.2/Bookingcore.3.6.2/modules/Layout/parts/footer.blade.php ENDPATH**/ ?>