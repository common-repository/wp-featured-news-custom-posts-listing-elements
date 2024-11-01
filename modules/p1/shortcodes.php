<?php
/*****************
Post Block 1 Post List 
*****************/
function wfnews_post_block_1_shortcode($atts){
extract( shortcode_atts( array(
		'type' => 'post',
        'category' => '',
        'taboption' => 'no',
        'toptabcategory' => 'toptabcategory',
        'dropdowntabcategory' => 'dropdowntabcategory',
		'current_time' => time(),
		'imageanimate' => 'no',
		'nextprevbtn' => 'no',
		'large_post_id' => '',
		'large_post_title_limit' => 100,
		'large_post_excerpt_limit' => 15,
        'blockcolor' => '',
        'itemcount' => 5,
        'title_character_limit' => 100,
        'wordlimit' => 15,
        'orderby' => 'title',
        'order' => 'DESC',
        'heading' => 'Heading',
		'bgimagecls' => '',
		'loadercolor' => '',
		'blockbordercolor' => '',
		'blockbackgroundcolor' => '',
		'blocktextcolor' => '',
		'blockhovercolor' => '',
		'blockheadingcolor' => '',
		'blockheadingbackgroundcolor' => '',
		'blocksubtabbackground' => '',
		'blockcategorybackground' => '',
		'blockborder' => 'no',
		'heading_style' => '',
		'title_font' => '',		
		'lg_title_font_size' => '',
		'sm_title_font_size' => '',
		'lg_title_line_height' => '1.4',
		'sm_title_line_height' => '',
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
		'lg_post_title_color' => '',		
		'lg_post_meta_color' => '',		
		'block_tab_active_color' => '',		
		'sm_post_title_color' => '',		
		'sm_post_meta_color' => '',		
		'lg_post_cat_meta' => 'yes',		
		'lg_post_date_meta' => 'yes',				
		'sm_post_date_meta' => 'yes',		
		'heading_border_color' => '',		
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
	$lg_title_font_size='';
	$sm_title_line_height='';
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
		$explode_top_cat = explode(",", $category);
		$explode_down_cat = explode(",", $category);
		// generate unique class for the section	
		for($i=0;$i<=50;$i++){
			$str = 'abcdefghijk';
			$shuffled = str_shuffle($str);
		}
		$unique_css_class=$shuffled;
		
		//include custom css
		include('block_1_css.php');	
		
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
			
			if($large_post_title_limit==''){ $large_post_title_limit=100;}else{$large_post_title_limit=100;}
			if($large_post_excerpt_limit==''){ $wordlimit=15;}else{$wordlimit=15;}
			if($title_character_limit==''){ $title_character_limit=100;}else{$title_character_limit=100;}
			if($wordlimit==''){ $wordlimit=15;}else{$wordlimit=15;}
			if($current_time==''){ $current_time = time();}else{$current_time=$current_time;}
			
			if($blockcolor || $blockhovercolor || $blockcategorybackground){
			if($blockhovercolor){
			include('blockhovercolor.php');
			}else{
				if($blockcolor){
				include('dependent-blockcolor.php');
				}
			}
			if($blockcategorybackground){
				include('blockcategorybackground.php');
				}
			if($blockcolor){
				include('blockcolor.php');
			}
			}

			if((!empty($blockheadingcolor)) || (!empty($blockheadingbackgroundcolor)) || (!empty($blockbordercolor)) || (!empty($blockbackgroundcolor)) || (!empty($blockposttitlecolor)) || (!empty($blockcolor)) || (!empty($blocktextcolor)) || (!empty($blockdatecolor))){

			if($blockheadingcolor){
			include('blockheadingcolor.php');
			} 
			if($blockheadingbackgroundcolor){
			include('blockheadingbackgroundcolor.php');	
			}else{
				if($blockbackgroundcolor){
				include('dependent-blockbackgroundcolor.php');	
				}
			}
			if($blockbordercolor){
			include('blockbordercolor.php');
			}
			if($blockbackgroundcolor){
			include('blockbackgroundcolor.php');
			}
		
			if($blocktextcolor){
			include('blocktextcolor.php');
			}

			if($blocksubtabbackground){
				include('blocksubtabbackground.php');
			}
			}
			if($block_tab_active_color){
				include('block_active_tab_color.php');
			}
			if($lg_post_title_color){
				include('lg_post_title_color.php');
			}
			if($lg_post_meta_color){
				include('lg_post_meta_color.php');
			}
			if($sm_post_title_color){
				include('sm_post_title_color.php');
			}
			if($sm_post_meta_color){
				include('sm_post_meta_color.php');
			}			
			$list = '';
			$list .= '<div class="'.esc_attr($unique_css_class).' post-block post_block_1 post_block_1'.$current_time.' '.$blockborder.'" ';if($block_padding || $block_margin){ $list.='style="';if($block_padding){ $list.='padding:'.$block_padding.';'; } if($block_margin){ $list.='margin:'.$block_margin.';'; } $list.='"'; } $list.='>';
			//Start from here
			if($heading){		
			$list .= '<h4 class="titleh3 margin-bottom-20 margin-bottom-15"><b ';if($headline_font_data_inline_style || $headline_font_size || $headline_line_height){ $list.='style="'; if($headline_font_data_inline_style){ $list.=$headline_font_data_inline_style; } if($headline_font_size){ $list.='font-size:'.$headline_font_size.' !important;'; } if($headline_line_height){ $list.='line-height:'.$headline_line_height.' !important;'; } $list.='"'; } $list.='>'.$heading.'</b>';

			$list .='</h4>';
			}			

					$list .= '<div class="noloader">';
	   $list .= '<div class="loader'.$current_time.'" style="display:none;"></div>
				<div id="mynewcontent'.$current_time.'">
				<div class="row">
				<div class="col-md-6">';
			global $wp_query, $paged;
			$i=0;
			if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
			elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
			else { $paged = 1; }
			
			if($post_type == 'post'){
				
			//large post $args	
			if($large_post_id == ''){
				$args = array('post_type' => 'post', 'paged' => $paged, 'posts_per_page' => 1, 'cat' => $explode_down_cat, 'orderby' => $orderby, 'order' => $order);
			}else{
				$args = array('p' => $large_post_id, 'post_type' => 'any');
			}			
			//large post $args end
			
			} elseif($post_type == 'attachment') {
				
			//large post $args	
			if($large_post_id == ''){
				$args = array('post_type' => $post_type, 'paged' => $paged, 'posts_per_page' => 1,  'orderby' => $orderby, 'order' => $order, 'post_mime_type' => 'image/jpeg,image/gif,image/jpg,image/png','post_status' => 'any' );
			}else{
				$args = array('p' => $large_post_id, 'post_type' => 'any');
			}
			//large post $args end	
			
			} else{

			//large post $args	
			if($large_post_id == ''){
				$args = array('post_type' => $post_type, 'paged' => $paged, 'posts_per_page' => 1,  'orderby' => $orderby, 'order' => $order);
			}else{
				$args = array('p' => $large_post_id, 'post_type' => 'any');
			}
			//large post $args end	
			
			}
			$post_array_new = array();	
			$wp_query7 = new WP_Query( $args );
			/*Pagination Fix*/
					$temp_query = $wp_query;
					$wp_query   = NULL;
					$wp_query   = $wp_query7;
					/*Pagination Fix end*/
			if ($wp_query->have_posts()) :  while ($wp_query->have_posts()) : $wp_query->the_post();
			$idd = get_the_ID();
			$post_array_new[] = get_the_ID();	
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

			if ( has_post_format( 'video' ) ) : 
				$videoicon = '<div class="play_md" style="background:none;"><a href="'.get_permalink().'"><img src="'. esc_url(WFNEWS_IMAGE_DIR) .'video.png" alt="'.esc_attr__('image','wfnews').'" style="width:48px;height:48px;" /></a></div>';
			else:
				$videoicon = '';
			endif;
			$list .= '<article class="article-home sectiononestyle1 style-alt">
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
						'; if($lg_post_cat_meta == 'yes'){ $list.='
							<div class="small-title cat" ';if($meta_font_data_inline_style || $meta_font_size || $meta_line_height){ $list.='style="'; if($meta_font_data_inline_style){ $list.=$meta_font_data_inline_style; } if($meta_font_size){ $list.='font-size:'.esc_attr($meta_font_size).' !important;'; } if($meta_line_height){ $list.='line-height:'.esc_attr($meta_line_height).' !important;'; } $list.='"'; } $list.='>' . wfnews_all_category_styles() . '</div>
						'; } $list.='	
							<'.esc_attr($title_tag).' ';if($lg_title_font_size){ $list.='style="font-size:'.esc_attr($lg_title_font_size).' !important;"'; } $list.='><a href="'.get_permalink().'" ';if($title_font_inline_style || $lg_title_font_size || $lg_title_line_height || $title_padding_bottom){ $list.='style="'; if($title_font_inline_style){ $list.=$title_font_inline_style; } if($lg_title_font_size){ $list.='font-size:'.esc_attr($lg_title_font_size).' !important;'; } if($lg_title_line_height){ $list.='line-height:'.esc_attr($lg_title_line_height).' !important;'; } if($title_padding_bottom){ $list.='padding-bottom:'.esc_attr($title_padding_bottom).' !important;display: block;'; } $list.='"'; } $list.='>' . mb_strimwidth( get_the_title(), 0, $large_post_title_limit, '...' ) . '</a></'.esc_attr($title_tag).'>
						'; if($lg_post_date_meta == 'yes'){ $list.='	
							<div class="meta" ';if($meta_font_data_inline_style || $meta_font_size || $meta_line_height){ $list.='style="'; if($meta_font_data_inline_style){ $list.=$meta_font_data_inline_style; } if($meta_font_size){ $list.='font-size:'.esc_attr($meta_font_size).' !important;'; } if($meta_line_height){ $list.='line-height:'.esc_attr($meta_line_height).' !important;'; } $list.='"'; } $list.='>
							
								<span ';if($meta_font_size){ $list.='style="font-size:inherit"'; } $list.='>'.esc_html__("by", "wfnews").' '.get_the_author_posts_link().'</span>
								
								<span ';if($meta_font_size){ $list.='style="font-size:inherit"'; } $list.='>'.esc_html__("on", "wfnews").' '.get_the_time('M j, Y').'</span>
								
								<span class="comment" ';if($meta_font_size){ $list.='style="font-size:inherit"'; } $list.='> <a class="meta-link" href="'.get_the_permalink().'"><i class="far fa-comment"></i> '.get_comments_number().'</a> </span>
								
							</div>
						'; } $list.='	
							<p>' . wfnews_excerpt($large_post_excerpt_limit) . '</p>
						</div>
					</article>';
			endwhile; endif;
					
			$list .= '</div>
				
				<div class="col-md-6">
					<div class="mini-posts">
				';
			$arr1 = $post_array_new;
			$ar = array_merge($arr1);
			$showpost_item = $itemcount - 1;

			if($post_type == 'post'){			
			//small post $args
			if (empty($ar)) {	
				$args = array('post_type' => 'post',  'posts_per_page' => $showpost_item, 'cat' => $explode_down_cat, 'orderby' => $orderby, 'order' => $order);
			}else{
				$args = array('post_type' => 'post',  'post__not_in' => $ar, 'posts_per_page' => $showpost_item, 'cat' => $explode_down_cat, 'orderby' => $orderby, 'order' => $order);
			}
			//small post $args end
			} elseif($post_type == 'attachment') {
				
			//small post $args
			if (empty($ar)) {	
				$args = array('post_type' => $post_type,  'posts_per_page' => $showpost_item, 'orderby' => $orderby, 'order' => $order, 'post_mime_type' => 'image/jpeg,image/gif,image/jpg,image/png','post_status' => 'any');
			}else{
				$args = array('post_type' => $post_type,  'post__not_in' => $ar, 'posts_per_page' => $showpost_item,  'orderby' => $orderby, 'order' => $order, 'post_mime_type' => 'image/jpeg,image/gif,image/jpg,image/png','post_status' => 'any');
			}
			//small post $args	end	
			
			} else {
				
			//small post $args
			if (empty($ar)) {	
				$args = array('post_type' => $post_type,  'posts_per_page' => $showpost_item, 'orderby' => $orderby, 'order' => $order);
			}else{
				$args = array('post_type' => $post_type,  'post__not_in' => $ar, 'posts_per_page' => $showpost_item,  'orderby' => $orderby);
			}
			//small post $args	end		
			
			}	
			
			$wp_query8 = new WP_Query( $args );
			if ($wp_query8->have_posts()) :  while ($wp_query8->have_posts()) : $wp_query8->the_post();

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
			if ( has_post_format( 'video' ) ) : 
				$videoicon = '<div class="play_thumb_48" style="background:none;"><a href="'.get_permalink().'"><img src="'. esc_url(WFNEWS_IMAGE_DIR) .'video.png" alt="'.esc_attr__('image','wfnews').'" style="width:36px;height:36px;" /></a></div>';
			else:
				$videoicon = '';
			endif;
			$list .= '
						<article class="style2 style-alt">
							<div class="row">
								<div class="col-md-4 ">
									<div class="col-md-12 no-padding">
									'.$videoicon.'
										<a href="'.get_permalink().'">
											<div class="beforethumbnail">
												<div class="thumbnail '.esc_attr($bgimagecls).'" style="background-image: url('.esc_url($featured_img_url).'); opacity: 1;"></div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-8 col-sm-8">
									<div class="post-excerpt no-padding">
									'; if($sm_post_date_meta == 'yes'){ $list.='
										<div class="meta" ';if($meta_font_data_inline_style || $meta_font_size || $meta_line_height){ $list.='style="'; if($meta_font_data_inline_style){ $list.=$meta_font_data_inline_style; } if($meta_font_size){ $list.='font-size:'.esc_attr($meta_font_size).' !important;'; } if($meta_line_height){ $list.='line-height:'.esc_attr($meta_line_height).' !important;'; } $list.='"'; } $list.='>
											<span ';if($meta_font_size){ $list.='style="font-size:inherit"'; } $list.='>'.get_the_time('M j, Y').'</span>
										</div>
									'; } $list.='	
										<'.esc_attr($title_tag).' ';if($sm_title_font_size){ $list.='style="font-size:'.esc_attr($sm_title_font_size).' !important;"'; } $list.='><a href="'.get_permalink().'" ';if($title_font_inline_style || $sm_title_font_size || $sm_title_line_height || $title_padding_bottom){ $list.='style="'; if($title_font_inline_style){ $list.=$title_font_inline_style; } if($sm_title_font_size){ $list.='font-size:'.esc_attr($sm_title_font_size).' !important;'; } if($sm_title_line_height){ $list.='line-height:'.esc_attr($sm_title_line_height).' !important;'; } if($title_padding_bottom){ $list.='padding-bottom:'.esc_attr($title_padding_bottom).' !important;display: block;'; } $list.='"'; } $list.='>' . mb_strimwidth( get_the_title(), 0, $title_character_limit, '...' ) . '</a></'.esc_attr($title_tag).'>';
								if($sm_post_date_meta == 'yes'){ 		
										if(get_comments_number()>0){
								$list.= '<div class="meta" ';if($meta_font_data_inline_style || $meta_font_size || $meta_line_height){ $list.='style="'; if($meta_font_data_inline_style){ $list.=$meta_font_data_inline_style; } if($meta_font_size){ $list.='font-size:'.esc_attr($meta_font_size).' !important;'; } if($meta_line_height){ $list.='line-height:'.esc_attr($meta_line_height).' !important;'; } $list.='"'; } $list.='>
											<span class="comment" ';if($meta_font_size){ $list.='style="font-size:inherit"'; } $list.='> <a class="meta-link" href="'.get_the_permalink().'"><i class="far fa-comment"></i> '.get_comments_number().'</a> </span>
										</div>';
										}
								} 			
							$list.= '</div>
								</div>
							</div>
						</article>
					
			'; 
			endwhile; endif;
			wp_reset_postdata();

			$list.= '</div>
			</div>
			';
			$list .='</div>';
			// Reset main query object
						$wp_query = NULL;
						$wp_query = $temp_query;

			$list .='</div>';	
			//End all of tab option			
			$list .='</div>';
			
			$list .='</div>';
			$list.= $style;
			return $list;
			}
add_shortcode('wfnews_post_block_1_post', 'wfnews_post_block_1_shortcode');

if(class_exists('WPBakeryVisualComposerAbstract')) {
	include_once('vc_shortcodes.php');
}