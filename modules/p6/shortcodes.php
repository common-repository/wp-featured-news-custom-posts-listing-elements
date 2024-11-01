<?php
/*****************
Post Block 6 Post List 
*****************/

function wfnews_post_block_6_shortcode($atts){
extract( shortcode_atts( array(
		'type' => 'post',
        'category' => '',
		'taboption' => 'no',
        'toptabcategory' => '',
        'dropdowntabcategory' => '',
		'current_time' => time(),
		'imageanimate' => 'no',
		'nextprevbtn' => 'no',
		'title_character_limit' => 100,
        'blockcolor' => '',
        'orderby' => 'title',
        'order' => 'DESC',
        'heading' => 'Heading',
        'bgimagecls' => '',
        'blocksubtabbackground' => '',
		'blockbordercolor' => '',
		'blockbackgroundcolor' => '',
		'blockposttitlecolor' => '',
		'blocktextcolor' => '',
		'blockhovercolor' => '',
		'blockdatecolor' => '',
		'blockheadingcolor' => '',
		'blockheadingbackgroundcolor' => '',
		'blockcategorybackground' => '',
		'blockborder' => 'no',
        'loadercolor' => '',
		'heading_style' => '',
		'title_font' => '',		
		'title_font_size' => '',
		'title_line_height' => '',
		'title_padding_bottom' => '',
		'headline_font' => '',		
		'headline_font_size' => '',
		'headline_line_height' => '',
		'excerpt_font' => '',		
		'excerpt_font_size' => '',
		'excerpt_line_height' => '',
		'meta_font' => '',		
		'meta_font_size' => '',
		'meta_line_height' => '',
		'title_tag' => 'h4',
		'next_button_font' => '',		
		'next_button_font_size' => '',		
		'block_padding' => '',		
		'block_margin' => '', 'blocknumber' => '',		
		'button_width' => '',		
		'heading_border_color' => '',		
		'post_date_meta' => 'yes',
		'tab_line_height' => '',
		'post_type' => 'post',		
), $atts) );
$style=''; $fronturl = home_url( '/' ); $fronturl .= 'post-block-';
/******************
MANAGE GOOGLE FONT DATA 
******************/ 
if(get_option('title_font_settings')== "on"){	
	if(isset($title_font) && ($title_font != '')){
	$title_font_data = wfnews_getFontsData( $title_font );		
	$title_font_inline_style = wfnews_googleFontsStyles( $title_font_data );  
	wfnews_enqueueGoogleFonts( $title_font_data ); 
	}else{
	$title_font_inline_style='';
	}		
}else{
	$title_font_inline_style='';
	$title_font='';
	$title_font_size='';
	$title_line_height='';
	$title_padding_bottom='';
}        
if(get_option('headline_font_settings')== "on"){
	if(isset($headline_font) && ($headline_font != '')){
	$headline_font_data = wfnews_getFontsData( $headline_font );
	$headline_font_data_inline_style = wfnews_googleFontsStyles( $headline_font_data );
    wfnews_enqueueGoogleFonts( $headline_font_data );
	}else{
	$headline_font_data_inline_style='';		
	}	
}else{
	$headline_font_data_inline_style='';
	$headline_font='';
	$headline_font_size='';
	$headline_line_height='';
}

if(get_option('meta_font_settings')== "on"){
	if(isset($meta_font) && ($meta_font != '')){
	$meta_font_data = wfnews_getFontsData( $meta_font );
	$meta_font_data_inline_style = wfnews_googleFontsStyles( $meta_font_data );
    wfnews_enqueueGoogleFonts( $meta_font_data );
	}else{
	$meta_font_data_inline_style ='';	
	}	
}else{
	$meta_font_data_inline_style ='';
	$meta_font ='';
	$meta_font_size ='';
	$meta_line_height ='';
}		

if(get_option('excerpt_font_settings')== "on"){
	if(isset($excerpt_font) && ($excerpt_font != '')){
	$excerpt_font_data = wfnews_getFontsData( $excerpt_font );
    $excerpt_font_data_inline_style = wfnews_googleFontsStyles( $excerpt_font_data );
    wfnews_enqueueGoogleFonts( $excerpt_font_data );
	}else{
	$excerpt_font_data_inline_style ='';	
	}	
}else{
	$excerpt_font_data_inline_style ='';
	$excerpt_font_size ='';
	$excerpt_line_height ='';
}

if(get_option('button_font_settings')== "on"){
	if(isset($next_button_font) && ($next_button_font != '')){
	$next_button_font_data = wfnews_getFontsData( $next_button_font );
    $next_btn_font_data_inline_style = wfnews_googleFontsStyles( $next_button_font_data );
    wfnews_enqueueGoogleFonts( $next_button_font_data  );
	}else{
	$next_btn_font_data_inline_style ='';	
	}	
}else{
	$next_btn_font_data_inline_style ='';
	$next_button_font ='';
	$next_button_font_size ='';
	$next_button_width ='';
}		
        /******************
        END MANAGE GOOGLE FONT DATA 
        ******************/
		
		// explode tab categories
		$explode_top_cat = explode(",", $toptabcategory);
		$explode_down_cat = explode(",", $dropdowntabcategory);

		// generate unique class for the section	
		for($i=0;$i<=50;$i++){
			$str = 'abcdefghijk';
			$shuffled = str_shuffle($str);
		}
		$unique_css_class=$shuffled;
		
		//include custom css
		include('block_6_css.php');	
		
		// style wise css headline css include
		if($heading_style == "style1") {
			include(dirname(__FILE__).'/../css/title/title-style1.php');
		}elseif ($heading_style == "style2"){
			include(dirname(__FILE__).'/../css/title/title-style1.php');
		}elseif ($heading_style == "style3"){
			include(dirname(__FILE__).'/../css/title/title-style1.php');
		}elseif ($heading_style == "style4"){
			include(dirname(__FILE__).'/../css/title/title-style1.php');
		}elseif ($heading_style == "style5"){
			include(dirname(__FILE__).'/../css/title/title-style1.php');
		}elseif ($heading_style == "style6"){
			include(dirname(__FILE__).'/../css/title/title-style1.php');
		}elseif ($heading_style == "style7"){
			include(dirname(__FILE__).'/../css/title/title-style1.php');
		}elseif ($heading_style == "style8"){
			include(dirname(__FILE__).'/../css/title/title-style1.php');
		}elseif ($heading_style == "style9"){
			include(dirname(__FILE__).'/../css/title/title-style1.php');
		}elseif ($heading_style == "style10"){
			include(dirname(__FILE__).'/../css/title/title-style1.php');
		}elseif ($heading_style == "style11"){
			include(dirname(__FILE__).'/../css/title/title-style1.php');
		}elseif ($heading_style == "style12"){
			include(dirname(__FILE__).'/../css/title/title-style1.php');
		}elseif ($heading_style == "style13"){
			include(dirname(__FILE__).'/../css/title/title-style1.php');
		}
		
			if($imageanimate=='yes'){ $bgimagecls='bg-img';}else{$bgimagecls='';}
			if($blockborder=='yes'){ $blockborder='wfnews-make-border';}else{$blockborder='';}
			
			if($blockcolor==''){ $loadercolor='#F26262';}else{$loadercolor=$blockcolor;}

			if($title_character_limit==''){ $title_character_limit=100;}else{$title_character_limit=100;}
			if($current_time==''){ $current_time = time();}else{$current_time=$current_time;}
			
			//Colors CSS files
			if((!empty($blockcolor)) || (!empty($blockhovercolor)) || (!empty($blockcategorybackground))){
						if($blockhovercolor){
							include('blockhovercolor.php');
						}else{
							if($blockcolor){					
							include('dependent-blockcolor.php');
							}
						}						
						if($blockcolor){
							include('blockcolor.php');
						}
						if($blockcategorybackground){
							include('blockcategorybackground.php');
						}
					}
			if($blockheadingcolor){
						include('blockheadingcolor.php');
					} 
					if($blockheadingbackgroundcolor){
						include('blockheadingbackgroundcolor.php');		
					}
					if($blockbordercolor){
						include('blockbordercolor.php');
					}
					if($blockbackgroundcolor){
						include('blockbackgroundcolor.php');
					}
					if($blockposttitlecolor){
						include('blockposttitlecolor.php');
					}
					
					if($blocktextcolor){
						include('blocktextcolor.php');
					}
					if($blockdatecolor){
						include('blockdatecolor.php');
					}
					if($blocksubtabbackground){
						include('blocksubtabbackground.php');
					}
					
			//Colors CSS files end
				
			$list ='<div><style>
						.loader'.$current_time.' {
							border: 16px solid #f3f3f3;
							border-radius: 50%;
							border-top: 16px solid '.$loadercolor.';
							width: 120px;
							height: 120px;
							margin: 0 auto;
							-webkit-animation: spin 2s linear infinite;
							animation: spin 2s linear infinite;
							position: absolute;
							z-index: 999;
							left: 42%;
							top: 42%;
						}
					 </style></div>';
			$list .='<div class="post-block '.esc_attr($unique_css_class).' post_block_6 post_block_6'.$current_time.' '.$blockborder.'" ';if($block_padding || $block_margin){ $list.='style="';if($block_padding){ $list.='padding:'.$block_padding.';'; } if($block_margin){ $list.='margin:'.$block_margin.';'; } $list.='"'; } $list.='>';
			if($heading){		
			$list .= '<h4 class="titleh3 margin-bottom-15"><b ';if($headline_font_data_inline_style || $headline_font_size || $headline_line_height){ $list.='style="'; if($headline_font_data_inline_style){ $list.=$headline_font_data_inline_style; } if($headline_font_size){ $list.='font-size:'.$headline_font_size.' !important;'; } if($headline_line_height){ $list.='line-height:'.$headline_line_height.' !important;'; } $list.='"'; } $list.='>'.$heading.'</b>';
	$list .='</h4>';
	}
			$list .= '<div class="noloader loadarticle">';
	   $list .= '<div class="loader'.$current_time.'" style="display:none;"></div>		
		';
				$list .='<div id="mynewcontent'.$current_time.'"><div class="row">';
				global $wp_query, $paged;			
				if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
				elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
				else { $paged = 1; }

/*New $args start*/
			if($post_type == 'post'){
				
			// post $args	
				$args = array('post_type' => 'post', 'paged' => $paged, 'posts_per_page' => 3,  'orderby' => $orderby, 'order' => $order, 'cat' => $category);	
			// post $args end
			
			} elseif($post_type == 'attachment') {
				
			// post $args	
				$args = array('post_type' => $post_type, 'paged' => $paged, 'posts_per_page' => 3,  'orderby' => $orderby, 'order' => $order,  'post_mime_type' => 'image/jpeg,image/gif,image/jpg,image/png','post_status' => 'any' );			
			// post $args end	
			
			} else{

			// post $args	
			$args = array('post_type' => $post_type, 'paged' => $paged, 'posts_per_page' => 3,  'orderby' => $orderby, 'order' => $order);				
			// post $args end	
			
			}			
/*New $args end*/				
				$wp_query4 = new WP_Query( $args );
				/*Pagination Fix*/
					$temp_query = $wp_query;
					$wp_query   = NULL;
					$wp_query   = $wp_query4;
					/*Pagination Fix end*/
				if ($wp_query4->have_posts()) :  while ($wp_query4->have_posts()) : $wp_query4->the_post(); 
					$featured_img = get_the_post_thumbnail_url(get_the_ID(),'full');
					if($featured_img){
						if ( wfnews_wp_is_mobile() ) {
						$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium');
						} else {
						$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
						}
					}else{
						if($post_type == 'attachment'){
							$featured_img_url = wp_get_attachment_url(get_post_thumbnail_id());
						}else{
							$featured_img_url = WFNEWS_IMAGE_DIR .'noblogimg.png';
						}
					}
					if ( has_post_format( 'video' ) ) { 
						$videoicon = '<div class="play_thumb_48" style="background:none;"><a href="'.get_permalink().'"><img src="'. esc_url(WFNEWS_IMAGE_DIR) .'video.png" alt="'.esc_attr__('image','wfnews').'" style="width:36px;height:36px;" /></a></div>';
					}else{
						$videoicon = '';
					}
					$list .= '
					<div class="col-md-4 ">
						<article class="style2 style-alt style-section2">
							<div class="col-md-12 no-padding">
								'.$videoicon.'
								<div class="margin-bottom-15">
									<a href="'.get_permalink().'">
										<div class="beforethumbnail148">
											<div class="thumbnail148 '.esc_attr($bgimagecls).'" style="background-image: url('.esc_url($featured_img_url).'); opacity: 1;"></div>';
											if($blocknumber) { $list .='<div class="wfnewsallinfo"><h3>'.esc_html__("Post Block", "wfnews").' '.$blocknumber.'</h3><p><a class="clckhr" target="_blank" href="'.esc_url($fronturl.$blocknumber).'/">'.esc_html__("Click Here", "wfnews").'</a> '.esc_html__("to view all features of this post-block", "wfnews").'</p></div>'; } $list .='
										</div>
									</a>
								</div>
							</div>
							<div>
								<div class="post-excerpt no-padding">
								'; if($post_date_meta == 'yes'){ $list.='
									<div class="meta" ';if($meta_font_data_inline_style || $meta_font_size || $meta_line_height){ $list.='style="'; if($meta_font_data_inline_style){ $list.=$meta_font_data_inline_style; } if($meta_font_size){ $list.='font-size:'.esc_attr($meta_font_size).' !important;'; } if($meta_line_height){ $list.='line-height:'.esc_attr($meta_line_height).' !important;'; } $list.='"'; } $list.='>
										<span ';if($meta_font_size){ $list.='style="font-size:inherit"'; } $list.='>'.get_the_time('M j, Y').'</span>
									</div>
								'; } $list.='	
									<'.esc_attr($title_tag).' class="title post_block_title" ';if($title_font_size){ $list.='style="font-size:'.esc_attr($title_font_size).' !important;"'; } $list.='><a href="'.get_permalink().'" ';if($title_font_inline_style || $title_font_size || $title_line_height || $title_padding_bottom){ $list.='style="'; if($title_font_inline_style){ $list.=$title_font_inline_style; } if($title_font_size){ $list.='font-size:'.esc_attr($title_font_size).' !important;'; } if($title_line_height){ $list.='line-height:'.esc_attr($title_line_height).' !important;'; } if($title_padding_bottom){ $list.='padding-bottom:'.esc_attr($title_padding_bottom).' !important;display: block;'; } $list.='"'; } $list.='>' . mb_strimwidth( get_the_title(), 0, $title_character_limit, '...' ) . '</a></'.esc_attr($title_tag).'>
								</div>
							</div>
						</article>
					</div>
					';
				 endwhile; endif;
				 wp_reset_postdata();
				$list .='</div>';
					// Reset main query object
						$wp_query = NULL;
						$wp_query = $temp_query;

					$list .='</div>';
			$list.= '</div>';
			$list.= '</div>';
			$list.= $style;		
			return $list;
			}
add_shortcode('wfnews_post_block_6_post', 'wfnews_post_block_6_shortcode');

if(class_exists('WPBakeryVisualComposerAbstract')) {
	include_once('vc_shortcodes.php');
}