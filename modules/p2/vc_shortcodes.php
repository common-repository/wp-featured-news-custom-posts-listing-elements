<?php
/*-----------------------------------------------------------------------------------*/
/* Start Using wfnews Shortcodes in the Visual Composer */
/*-----------------------------------------------------------------------------------*/
add_action( 'init', 'wfnews_vc_shortcodes_p2' );
function wfnews_vc_shortcodes_p2() {
$wfnewsabout = ' <a target="_blank" class="showfull" href="'.esc_url(admin_url("options-general.php?page=wfnews-about")).'">'.esc_html__('[PRO FEATURE]', 'wfnews').'</a>';
/*****************
Post Block 2 Post List 
*****************/

vc_map( array(
      "name" => esc_html__("FThemes - Post Block 2", 'wfnews'),
      "base" => "wfnews_post_block_2_post",
      "icon" => WFNEWS_IMAGE_DIR .'block_2.png',
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'wfnews'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Post Block 2', 'wfnews'),
      "params" => array(         
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading", 'wfnews'),
            "param_name" => "heading",
            "value" => '',
            "std" => 'Heading',
            "description" => ''
         ),
          array(
              "type" => "dropdown",
              "class" => "",
              "heading" => esc_html__("Heading Style", 'wfnews'),
              "param_name" => "heading_style",
              "value" => array(
                  //Label => Value
                  "Default" => "",
                  "Style-1" => "style1",
                  "Style-2 [PRO FEATURE]" => "style2",
                  "Style-3 [PRO FEATURE]" => "style3",
                  "Style-4 [PRO FEATURE]" => "style3",
                  "Style-5 [PRO FEATURE]" => "style3",
                  "Style-6 [PRO FEATURE]" => "style3",
                  "Style-7 [PRO FEATURE]" => "style3",
                  "Style-8 [PRO FEATURE]" => "style3",
                  "Style-9 [PRO FEATURE]" => "style3",
                  "Style-10 [PRO FEATURE]" => "style3",
                  "Style-11 [PRO FEATURE]" => "style3",
                  "Style-12 [PRO FEATURE]" => "style3",
                  "Style-13 [PRO FEATURE]" => "style3",
              ),
              "description" => ''
          ),
          array(
              "type" => "dropdown",
              "class" => "",
              "heading" => esc_html__("Choose Title Tag", 'wfnews'),
              "param_name" => "title_tag",
              "value" => array(
                  //Label => Value
                  "Default" => "h4",
                  "Heading One [PRO FEATURE]" => "h4",
                  "Heading Two [PRO FEATURE]" => "h4",
                  "Heading Three [PRO FEATURE]" => "h4",
                  "Heading Four" => "h4",
                  "Heading Five [PRO FEATURE]" => "h4",
                  "Heading Six [PRO FEATURE]" => "h4",
                  "Paragraph [PRO FEATURE]" => "h4",
                  "Div [PRO FEATURE]" => "h4",
                  "Span [PRO FEATURE]" => "h4",
              ),
              "description" => ''
          ),		 
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Select Category", 'wfnews'),
            "param_name" => "category",
            "value" => wfnews_post_categories(),
            "description" => ""           
         ),
		 array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__("Select Post Types", 'wfnews'),
            "param_name" => "post_type",
            "value" => wfnews_post_types(),
            "description" => ""
         ),			 
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Do you want Image Animate?", 'wfnews'),
            "param_name" => "imageanimate",
			"std"		=> "no",
            "value" => array(
				//Label => Value
				"Yes" => "yes"
			),
            "description" => ''
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Do you want Border?", 'wfnews'),
            "param_name" => "blockborder",
			"std"		=> "no",
            "value" => array(
				//Label => Value
				"Yes" => "yes"
			),
            "description" => ''
         ),
		 array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => esc_html__( "Block Border Color", "wfnews" ),
            "param_name" => "blockbordercolor",
            "value" => '', //Default Red color
			'dependency' => array(
				 'element' => 'blockborder',
				 'value' =>'yes',
			 ),
            "description" => esc_html__( "Choose Block Border color", "wfnews" )
         ),
		 array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => esc_html__( "Block Background Color", "wfnews" ).''.$wfnewsabout.'',
            "param_name" => "blockbackgroundcolor",
            "value" => '', //Default Red color
			'dependency' => array(
				 'element' => 'blockborder',
				 'value' =>'yes',
			 ),
            "description" => esc_html__( "Choose Block Background color", "wfnews" )
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Do you want load more?", "wfnews" ).''.$wfnewsabout.'',
            "param_name" => "nextprevbtn",
			"std"		=> "no",
            "value" => array(
				//Label => Value
				"Yes" => "yes"
			),
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Large Post ID (Optional)", 'wfnews'),
            "param_name" => "large_post_id",
            "value" => '',
            "description" => 'Please enter an id for the large post (Optional)'
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Large Post Title Limit In Character (Optional)", "wfnews" ).''.$wfnewsabout.'',
            "param_name" => "large_post_title_limit",
            "value" => 100,
			"std" => 100,
            "description" => 'Please enter Number for limit your post title (Optional)'
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Large Post Excerpt Limit In Word (Optional)", "wfnews" ).''.$wfnewsabout.'',
            "param_name" => "large_post_excerpt_limit",
            "value" => 15,
            "description" => 'Please enter Number for limit your post excerpt (Optional)'
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Post Item", "wfnews" ).''.$wfnewsabout.'',
            "param_name" => "itemcount",
            "value" => '',
            "std" => 5,
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Another Posts Title Limit In Character (Optional)", "wfnews" ).''.$wfnewsabout.'',
            "param_name" => "title_character_limit",
            "value" => 100,
			"std" => 100,
            "description" => 'Please enter Number for limit your post title (Optional)'
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Another Posts Excerpt Limit In Word", "wfnews" ).''.$wfnewsabout.'',
            "param_name" => "wordlimit",
            "value" => 15,
            "std" => 15,
            "description" => 'Please enter Number for limit your post excerpt (Optional)'
         ),

		  array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => esc_html__( "Block Heading Color", "wfnews" ).''.$wfnewsabout.'',
            "param_name" => "blockheadingcolor",
            "value" => '', //Default Red color
            "description" => esc_html__( "Choose Block Heading Color", "wfnews" )
         ),
		 array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => esc_html__( "Block Heading Background Color", "wfnews" ).''.$wfnewsabout.'',
            "param_name" => "blockheadingbackgroundcolor",
            "value" => '', //Default Red color
            "description" => esc_html__( "Choose Block Heading Background Color", "wfnews" )
         ),

		 array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => esc_html__( "Block Text color", "wfnews" ),
            "param_name" => "blocktextcolor",
            "value" => '', //Default Red color
            "description" => esc_html__( "Choose Block Text color", "wfnews" )
         ),
		 array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => esc_html__( "Block Category Background", "wfnews" ),
            "param_name" => "blockcategorybackground",
            "value" => '', //Default Red color
            "description" => esc_html__( "Choose Block Category Background", "wfnews" )
         ),
		 array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => esc_html__( "Block Link Hover color", "wfnews" ),
            "param_name" => "blockhovercolor",
            "value" => '', //Default Red color
            "description" => esc_html__( "Choose Block Link Hover color", "wfnews" )
         ),
		 array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => esc_html__( "Block Meta anchor color", "wfnews" ),
            "param_name" => "block_meta_anchor_color",
            "value" => '', //Default Red color
            "description" => esc_html__( "Choose Block color", "wfnews" )
         ),
		 array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => esc_html__( "Large Post Title Color", "wfnews" ).''.$wfnewsabout.'',
            "param_name" => "lg_post_title_color",
            "value" => '', 
            "description" => ""
         ),
		 array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => esc_html__( "Large Post Meta Color", "wfnews" ),
            "param_name" => "lg_post_meta_color",
            "value" => '', 
            "description" => ""
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("On/Off Large post category meta", 'wfnews'),
            "param_name" => "lg_post_cat_meta",
			"std"		=> "yes",
            "value" => array(
				//Label => Value
				"Yes" => "yes"
			),
            "description" => ''
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("On/Off Large post author, date, comment meta", 'wfnews'),
            "param_name" => "lg_post_date_meta",
			"std"		=> "yes",
            "value" => array(
				//Label => Value
				"Yes" => "yes"
			),
            "description" => ''
         ),		 
		 array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => esc_html__( "Small Post Title Color", "wfnews" ),
            "param_name" => "sm_post_title_color",
            "value" => '', 
            "description" => ""
         ),
		 array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => esc_html__( "Small Post Meta Color", "wfnews" ),
            "param_name" => "sm_post_meta_color",
            "value" => '', 
            "description" => ""
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("On/Off Small post cat meta", 'wfnews'),
            "param_name" => "sm_post_cat_meta",
			"std"		=> "yes",
            "value" => array(
				//Label => Value
				"Yes" => "yes"
			),
            "description" => ''
         ),		 
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("On/Off Small post date meta", 'wfnews'),
            "param_name" => "sm_post_date_meta",
			"std"		=> "yes",
            "value" => array(
				//Label => Value
				"Yes" => "yes"
			),
            "description" => ''
         ),		 
		array(            
			"type" => "textfield",                        
			"class" => "",            
			"heading" => esc_html__("Block Padding", 'wfnews'),            
			"param_name" => "block_padding",            
			"description" => esc_html__("Example: 10px 5px 0px 10px. It means(top padding is 10px,right padding is 5px,bottom padding is 0px,left padding is 10px)", 'wfnews'),
			
		),	
		array(            
			"type" => "textfield",                        
			"class" => "",            
			"heading" => esc_html__("Block Margin", 'wfnews'),            
			"param_name" => "block_margin",            
			"description" => esc_html__("Example: 10px 5px 0px 10px. It means(top margin is 10px,right margin is 5px,bottom margin is 0px,left margin is 10px)", 'wfnews'),
			
		),		 
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Order By", 'wfnews'),
            "param_name" => "orderby",
            "value"       => array(
				"Post ID"   => "ID",
				"Title"   => "title",
				"Post Name"   => "name",
				"Post Date"   => "date",
				"Post Comment"   => "comment_count"
			  ),
			"std"         => "title",
            "description" => ""
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Order", 'wfnews'),
            "param_name" => "order",
            "value"       => array(
				"ASC"   => "ASC",
				"DESC"   => "DESC"
			  ),
			"std"         => "DESC",
            "description" => ""
         ),
		 array(
            "type" => "textfield",
            "class" => "",
            "heading" => esc_html__("Current Time (Do not Change It)", 'wfnews'),
            "param_name" => "current_time",
            "value" => time(),
			"std" => time(),
            "description" => 'Do not Change It'
         ),
		 array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Shortcode Number", 'wfnews'),
			"param_name" => "blocknumber",
			"description" => esc_html__("Leave it Empty. Its for showcasing the element only.", 'wfnews'),
		),
		array(
			'type' => 'google_fonts',
			'param_name' => 'title_font',
			'settings' => array(
				'fields' => array(
					'font_family_description' => esc_html__( 'Select Font Family.', 'wfnews' ),
					'font_style_description' => esc_html__( 'Select Font Style.', 'wfnews' ),
				),
			), 
			'weight' => 0,
			'group' => 'Title-Settings',                    
		),
		array(            
			"type" => "textfield",                        
			"class" => "",            
			"heading" => esc_html__("Large Title Font Size", 'wfnews'),            
			"param_name" => "lg_title_font_size",            
			"description" => 'Insert font size (e.g 22px)',
			'group' => 'Title-Settings', 			
		),
		array(            
			"type" => "textfield",                        
			"class" => "",            
			"heading" => esc_html__("Small Title Font Size", 'wfnews'),            
			"param_name" => "sm_title_font_size",            
			"description" => 'Insert font size (e.g 20px)',
			'group' => 'Title-Settings', 			
		),	
		array(            
			"type" => "textfield",                        
			"class" => "",            
			"heading" => esc_html__("Large Title Line Height", 'wfnews'),            
			"param_name" => "lg_title_line_height",            
			"description" => 'Insert title line height (e.g 22px)',
			'group' => 'Title-Settings', 			
		),
		array(            
			"type" => "textfield",                        
			"class" => "",            
			"heading" => esc_html__("Small Title Line Height", 'wfnews'),            
			"param_name" => "sm_title_line_height",            
			"description" => 'Insert title line height (e.g 22px)',
			'group' => 'Title-Settings', 			
		),
		array(            
			"type" => "textfield",                        
			"class" => "",            
			"heading" => esc_html__("Title Padding Bottom", 'wfnews'),            
			"param_name" => "title_padding_bottom",            
			"description" => esc_html__('Example: 10px', 'wfnews'),
			'group' => 'Title-Settings', 			
		),		
		array(
			'type' => 'google_fonts',
			"heading" => esc_html__("Headline Google Font", "wfnews" ).''.$wfnewsabout.'',
			'param_name' => 'headline_font',
			'settings' => array(
				'fields' => array(
					'font_family_description' => esc_html__( 'Select Font Family.', 'wfnews' ),
					'font_style_description' => esc_html__( 'Select Font Style.', 'wfnews' ),
				),
			), 
			'weight' => 0,
			'group' => 'Headline-Settings',                    
		),
		array(            
			"type" => "textfield",                        
			"class" => "",            
			"heading" => esc_html__("Headline Font Size", 'wfnews'),            
			"param_name" => "headline_font_size",            
			"description" => 'Insert font size (e.g 22px)',
			'group' => 'Headline-Settings', 			
		),	
		
		array(            
			"type" => "textfield",                        
			"class" => "",            
			"heading" => esc_html__("Headline Line Height", 'wfnews'),            
			"param_name" => "headline_line_height",            
			"description" => 'Insert title line height (e.g 22px)',
			'group' => 'Headline-Settings', 			
		),
		array(
			'type' => 'google_fonts',
			"heading" => esc_html__("Excerpt Google Font", "wfnews" ).''.$wfnewsabout.'',
			'param_name' => 'excerpt_font',
			'settings' => array(
				'fields' => array(
					'font_family_description' => esc_html__( 'Select Font Family.', 'wfnews' ),
					'font_style_description' => esc_html__( 'Select Font Style.', 'wfnews' ),
				),
			), 
			'weight' => 0,
			'group' => 'Excerpt-Settings',                    
		),
		array(            
			"type" => "textfield",                        
			"class" => "",            
			"heading" => esc_html__("Excerpt Font Size", 'wfnews'),            
			"param_name" => "excerpt_font_size",            
			"description" => esc_html__("Insert font size (e.g 22px)", 'wfnews'),
			'group' => 'Excerpt-Settings', 			
		),	
		array(            
			"type" => "textfield",                        
			"class" => "",            
			"heading" => esc_html__("Excerpt Line Height", 'wfnews'),            
			"param_name" => "excerpt_line_height",            
			"description" => esc_html__("Insert title line height (e.g 22px)", 'wfnews'),
			'group' => 'Excerpt-Settings', 			
		),
		array(
			'type' => 'google_fonts',
			"heading" => esc_html__("Meta Google Font", "wfnews" ).''.$wfnewsabout.'',
			'param_name' => 'meta_font',
			'settings' => array(
				'fields' => array(
					'font_family_description' => esc_html__( 'Select Font Family.', 'wfnews' ),
					'font_style_description' => esc_html__( 'Select Font Style.', 'wfnews' ),
				),
			), 
			'weight' => 0,
			'group' => 'Meta-Settings',                    
		),
		array(            
			"type" => "textfield",                        
			"class" => "",            
			"heading" => esc_html__("Meta Font Size", 'wfnews'),            
			"param_name" => "meta_font_size",            
			"description" => esc_html__("Insert font size (e.g 22px)", 'wfnews'),
			'group' => 'Meta-Settings', 			
		),	
		array(            
			"type" => "textfield",                        
			"class" => "",            
			"heading" => esc_html__("Meta Line Height", 'wfnews'),            
			"param_name" => "meta_line_height",            
			"description" => esc_html__("Insert title line height (e.g 22px)", 'wfnews'),
			'group' => 'Meta-Settings', 			
		),
		array(
			'type' => 'google_fonts',
			"heading" => esc_html__("Button Google Font", "wfnews" ).''.$wfnewsabout.'',
			'param_name' => 'button_font',
			'settings' => array(
				'fields' => array(
					'font_family_description' => esc_html__( 'Select Font Family.', 'wfnews' ),
					'font_style_description' => esc_html__( 'Select Font Style.', 'wfnews' ),
				),
			), 
			'weight' => 0,
			'group' => 'Button-Settings',                    
		),
		array(            
			"type" => "textfield",                        
			"class" => "",            
			"heading" => esc_html__("Button Font Size", 'wfnews'),            
			"param_name" => "button_font_size",            
			"description" => esc_html__("Insert font size (e.g 22px)", 'wfnews'),
			'group' => 'Button-Settings', 			
		),
		array(            
			"type" => "textfield",                        
			"class" => "",            
			"heading" => esc_html__("Button Width", 'wfnews'),            
			"param_name" => "button_width",            
			"description" => esc_html__("Insert button size (e.g 220px)", 'wfnews'),
			'group' => 'Button-Settings', 			
		),
		 array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => esc_html__( "Heading Border Color", "wfnews" ),
            "param_name" => "heading_border_color",
            "value" => '', 
            "description" => ""
         ),	
		 array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => esc_html__( "Load More Button Background Color", "wfnews" ),
            "param_name" => "load_more_btn_bg",
            "value" => '', 
            "description" => ""
         ),			 
	)
)
);	
}