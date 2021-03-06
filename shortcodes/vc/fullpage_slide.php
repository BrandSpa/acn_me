<?php
  function acn_fullpage_slide_vc() {
    $params = [
      [
        "heading" => "Background image",
        "type" => "attach_image",
        "param_name" => "bg_img"
      ],
      [
        "heading" => "Background image mobile",
        "type" => "attach_image",
        "param_name" => "bg_img_mobile"
      ],
      [
        "type" => "textfield",
        "param_name" => "anchor"
      ],
			[
				"type" => "textarea_html",
				"param_name" => "content"
			]
		];

    vc_map(
      array(
        "name" =>  "FullPage Slide",
        "base" => "acn_fullpage_slide",
        "category" =>  "ACN",
				"content_element" => true,
        "params" => $params
      ) 
    );

		if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    	class WPBakeryShortCode_acn_fullpage_slide extends WPBakeryShortCode {}
		}
  }

add_action( 'vc_before_init', 'acn_fullpage_slide_vc' );