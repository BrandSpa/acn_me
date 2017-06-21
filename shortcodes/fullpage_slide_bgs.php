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
		<div class="section" 
			style="
			background: url(<?php echo $bgUrl ?>); 
			background-size: cover; 
			background-position: center center
			position: relative
			"
		>
		<div 
			style="background: url(<?php echo $overlayUrl ?>); 
			background-size: cover; 
			background-position: center center;
			position: absolute;
			width: 100%;
			height: 100vh
			"
		>
		</div>

			<?php echo do_shortcode($content) ?>
		</div>
	<?php
	return ob_get_clean();
}

add_shortcode( 'acn_fullpage_slide_bgs', 'acn_fullpage_slide_bgs_sc' );