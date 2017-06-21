<?php

function acn_fullpage_slide_sc( $atts, $content ) {
	$at = shortcode_atts([
		"bg_img" => "",
		"bg_color" => "#fff"
	], $atts);
	
	$bgUrl = wp_get_attachment_url($slide['bg_img']); 

	ob_start();

	?>
		<div class="section" style="background: url(<?php echo $bgUrl ?>)">
			<?php echo do_shortcode($content) ?>
		</div>
	<?php
	return ob_get_clean();
}

add_shortcode( 'acn_fullpage_slide', 'acn_fullpage_slide_sc' );