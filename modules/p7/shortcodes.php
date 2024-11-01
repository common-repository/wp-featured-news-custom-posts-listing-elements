<?php
/*****************
Post Block 7 Post List 
*****************/
function wfnews_post_block_7_shortcode($atts){
extract( shortcode_atts( array(
		'type' => 'post',
        'category' => '',
		'current_time' => time(),
		'imageanimate' => 'no',
		'title_character_limit' => 100,
        'itemcount' => 3,
        'blockcolor' => '',
        'orderby' => 'title',
        'order' => 'DESC',
        'heading' => 'Heading',
		'bgimagecls' => '',
		'blockbordercolor' => '',
		'blockbackgroundcolor' => '',
		'blockposttitlecolor' => '',
		'blocktextcolor' => '',
		'blockhovercolor' => '',
		'blockdatecolor' => '',
		'blockheadingcolor' => '',
		'blockcategorybackground' => '',
		'blockheadingbackgroundcolor' => '',
		'blockborder' => 'no',
		'heading_style' => '',
		'title_font' => '',		
		'title_font_size' => '',
		'title_line_height' => '',
		'title_padding_bottom' => '',
		'headline_font' => '',		
		'headline_font_size' => '',
		'headline_line_height' => '',
		'meta_font' => '',		
		'meta_font_size' => '',
		'meta_line_height' => '',		
				
		'title_tag' => 'h4',		
		'block_padding' => '',		
		'block_margin' => '', 'blocknumber' => '',			
		'nextprevbtn' => 'no',
		'button_width' => '',
		'button_font' => '',		
		'button_font_size' => '',
		'post_cat_meta' => 'yes',		
		'post_date_meta' => 'yes',		
		'block_meta_anchor_color' => '',		
		'heading_border_color' => '',		
		'load_more_btn_bg' => '',		
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
if(get_option('button_font_settings')== "on"){
	if(isset($button_font) && ($button_font != '')){
	$button_font_data = wfnews_getFontsData( $button_font );
    $button_font_data_inline_style = wfnews_googleFontsStyles( $button_font_data );
    wfnews_enqueueGoogleFonts( $button_font_data );
	}else{
	$button_font_data_inline_style ='';	
	}	
}else{
	$button_font_data_inline_style ='';
	$button_font ='';
	$button_font_size ='';
	$button_width ='';
}			
/******************
END MANAGE GOOGLE FONT DATA 
******************/

		// generate unique class for the section	
		for($i=0;$i<=50;$i++){
			$str = 'abcdefghijk';
			$shuffled = str_shuffle($str);
		}
		$unique_css_class=$shuffled;
		
		//include custom css
		include('block_7_css.php');	
		
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
			
			if($itemcount==''){ $itemcount=3;}else{$itemcount=5;}
			if($title_character_limit==''){ $title_character_limit=100;}else{$title_character_limit=100;}
			if($current_time==''){ $current_time = time();}else{$current_time=$current_time;}
			
			
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
			if((!empty($blockheadingcolor)) || (!empty($blockheadingbackgroundcolor)) || (!empty($blockbordercolor)) || (!empty($blockbackgroundcolor)) || (!empty($blockposttitlecolor)) || (!empty($blockcolor)) || (!empty($blocktextcolor)) || (!empty($blockdatecolor))){
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
			}	
			if($block_meta_anchor_color){
			include('block_meta_anchor_color.php');
			}
			if($load_more_btn_bg){
			include('load_more_btn_bg.php');
			}			
			$list ='';
			$list .='<div class="post-block '.esc_attr($unique_css_class).' post_block_7 post_block_7'.$current_time.' '.$blockborder.'" ';if($block_padding || $block_margin){ $list.='style="';if($block_padding){ $list.='padding:'.$block_padding.';'; } if($block_margin){ $list.='margin:'.$block_margin.';'; } $list.='"'; } $list.='>';
			if($heading){			
			$list .= '<h4 class="margin-bottom-15"><b ';if($headline_font_data_inline_style || $headline_font_size || $headline_line_height){ $list.='style="'; if($headline_font_data_inline_style){ $list.=$headline_font_data_inline_style; } if($headline_font_size){ $list.='font-size:'.$headline_font_size.' !important;'; } if($headline_line_height){ $list.='line-height:'.$headline_line_height.' !important;'; } $list.='"'; } $list.='>'.$heading.'</b></h4>';
			}
			$list .= '<div class="row post_block_7_posts'.$current_time.'">';			

/*New $args start*/
			if($post_type == 'post'){
				
			// post $args	
			$the_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => $itemcount, 'cat' => $category, 'orderby' => $orderby, 'order' => $order));	
			// post $args end
			
			} elseif($post_type == 'attachment') {
				
			// post $args	
			$the_query = new WP_Query(array('post_type' => $post_type,'posts_per_page' => $itemcount,'orderby' => $orderby, 'order' => $order,  'post_mime_type' => 'image/jpeg,image/gif,image/jpg,image/png','post_status' => 'any' ));			
			// post $args end	
			
			} else{

			// post $args	
			$the_query = new WP_Query(array('post_type' => $post_type, 'posts_per_page' => $itemcount,  'orderby' => $orderby, 'order' => $order));				
			// post $args end	
			
			}			
/*New $args end*/			
			global $wp_query;		
			$temp_query = $wp_query;
			$wp_query= null;			
			$wp_query = $the_query;
			if ($wp_query->have_posts()) :  while ($wp_query->have_posts()) : $wp_query->the_post();
			global $post;
			$get_ids[]= $post->ID;
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
				$videoicon = '<div class="play_md" style="background:none;"><a href="'.get_permalink().'"><img src="'. esc_url(WFNEWS_IMAGE_DIR) .'video.png" alt="'.esc_attr__('image','wfnews').'" style="width:48px;height:48px;" /></a></div>';

			}else{
				$videoicon = '';
			}

	
			$list .= '<div class="col-md-6 col-sm-6">
						<article class="article-home style-alt">
							<div class="col-md-12 no-padding">
							'.$videoicon.'
								<a href="'.get_permalink().'">
									<div class="beforegeneralstyle">
										<div class="generalstyle '.esc_attr($bgimagecls).'" style="background-image: url('.esc_url($featured_img_url).'); opacity: 1;"></div>';
									if($blocknumber) { $list .='<div class="wfnewsallinfo"><h3>'.esc_html__("Post Block", "wfnews").' '.$blocknumber.'</h3><p><a class="clckhr" target="_blank" href="'.esc_url($fronturl.$blocknumber).'/">'.esc_html__("Click Here", "wfnews").'</a> '.esc_html__("to view all features of this post-block", "wfnews").'</p></div>'; } $list .='
									</div>
								</a>
							</div>
							<div class="post-excerpt">
							'; if($post_cat_meta == 'yes') { $list.='
								<div class="small-title cat" ';if($meta_font_data_inline_style || $meta_font_size || $meta_line_height){ $list.='style="'; if($meta_font_data_inline_style){ $list.=$meta_font_data_inline_style; } if($meta_font_size){ $list.='font-size:'.esc_attr($meta_font_size).' !important;'; } if($meta_line_height){ $list.='line-height:'.esc_attr($meta_line_height).' !important;'; } $list.='"'; } $list.='>' . wfnews_all_category_styles() . '</div>
							'; } $list.='	
								<'.esc_attr($title_tag).' class="post_block_title" ';if($title_font_size){ $list.='style="font-size:'.esc_attr($title_font_size).' !important;"'; } $list.='><a href="'.get_permalink().'" ';if($title_font_inline_style || $title_font_size || $title_line_height || $title_padding_bottom){ $list.='style="'; if($title_font_inline_style){ $list.=$title_font_inline_style; } if($title_font_size){ $list.='font-size:'.esc_attr($title_font_size).' !important;'; } if($title_line_height){ $list.='line-height:'.esc_attr($title_line_height).' !important;'; } if($title_padding_bottom){ $list.='padding-bottom:'.esc_attr($title_padding_bottom).' !important;display: block;'; } $list.='"'; } $list.='>' . mb_strimwidth( get_the_title(), 0, $title_character_limit, '...' ) . '</a></'.esc_attr($title_tag).'>
							'; if($post_date_meta == 'yes') { $list.='	
								<div class="meta" ';if($meta_font_data_inline_style || $meta_font_size || $meta_line_height){ $list.='style="'; if($meta_font_data_inline_style){ $list.=$meta_font_data_inline_style; } if($meta_font_size){ $list.='font-size:'.esc_attr($meta_font_size).' !important;'; } if($meta_line_height){ $list.='line-height:'.esc_attr($meta_line_height).' !important;'; } $list.='"'; } $list.='>
									<span ';if($meta_font_size){ $list.='style="font-size:inherit"'; } $list.='>'.esc_html__("by", "wfnews").' '.get_the_author_posts_link().'</span>
									<span ';if($meta_font_size){ $list.='style="font-size:inherit"'; } $list.='>'.esc_html__("on", "wfnews").' '.get_the_time('M j, Y').'</span>
									<span class="comment" ';if($meta_font_size){ $list.='style="font-size:inherit"'; } $list.='> <a class="meta-link" href="'.get_the_permalink().'"><i class="far fa-comment"></i> '.get_comments_number().'</a> </span>
								</div>
							'; } $list.='	
							</div>
						</article>
					</div>'; 
			endwhile;endif;
			$list.='</div>';		
			$list.= '</div>';				
			$wp_query = null;
			$wp_query = $temp_query;
			wp_reset_query();
			$list.= $style;
			return $list;
			}
add_shortcode('wfnews_post_block_7_post', 'wfnews_post_block_7_shortcode');

if(class_exists('WPBakeryVisualComposerAbstract')) {
	include_once('vc_shortcodes.php');
}