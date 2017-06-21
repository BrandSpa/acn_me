<?php

function acn_fullpage_slide_bgs_sc( $atts, $content ) {
	$at = shortcode_atts([
		"bg_img" => "",
		"overlay_img" => "",
		"bg_color" => "#000"
	], $atts);
	
	$bgUrl = wp_get_attachment_url( $at['bg_img'] ); 
	$overlayUrl = wp_get_attachment_url( $at['overlay_img'] ); 

	ob_start();

	?>

	<style>
		@keyframes Q4S1Fg {
    from {
        -webkit-transform: scale(1.2) translate3d(-30px, 0, 0);
        transform: scale(1.2) translate3d(-30px, 0, 0)
    }
    to {
        -webkit-transform: scale(1) translate3d(0, 0, 0);
        transform: scale(1) translate3d(0, 0, 0)
    }
	}
	
	.layer-animation {
		animation-name: Q4S1Fg;
		animation-duration: 3s;
	}

	</style>
		<div class="section layer-animation" 
			style="
			background: url(<?php echo $bgUrl ?>); 
			background-size: cover; 
			background-position: center center
			position: relative
			"
		>
		<div 
		class="layer-animation"
			style="background: url(<?php echo $overlayUrl ?>); 
			background-size: cover; 
			background-position: center center;
			position: absolute;
			width: 100%;
			height: 100vh;
			top: 0;
			left: 0
			"
		>
		</div>

			<?php echo do_shortcode($content) ?>
		</div>
	<?php
	return ob_get_clean();
}

add_shortcode( 'acn_fullpage_slide_bgs', 'acn_fullpage_slide_bgs_sc' );