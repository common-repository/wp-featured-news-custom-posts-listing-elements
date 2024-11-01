<?php
/******************
Post Categories List
******************/
if ( ! function_exists( 'wfnews_post_categories' ) ) {
    function wfnews_post_categories()
    {
        $wfnews_categories = array();
        $post_categories = get_categories(array(
            'hide_empty' => false
        ));
        if (is_array($post_categories) || is_object($post_categories)) {
            foreach ($post_categories as $category) {
                $wfnews_categories[$category->name] = $category->term_id;
            }
        }
        return $wfnews_categories;
    }
}
/******************
Post Categories List By ID
******************/
if ( ! function_exists( 'wfnews_post_categories_ID' ) ) {
    function wfnews_post_categories_ID()
    {
        $wfnews_categories = array();
        $post_categories = get_categories(array(
            'hide_empty' => false
        ));
        if (is_array($post_categories) || is_object($post_categories)) {
            foreach ($post_categories as $category) {
                $wfnews_categories[$category->name] = $category->term_id;
                //$wfnews_categories[$category->name] = $category->cat_ID;
            }
        }
        return $wfnews_categories;
    }
}
/******************
Default category name
******************/
if ( ! function_exists( 'wfnews_default_category' ) ) {
    function wfnews_default_category()
    {
        $categories = get_the_category();
        $default_category = array();
        if (!empty($categories)) {
            $default_category = $categories[0]->term_id;
        }
        return $default_category;
    }
}

	//********************************//
    // GOOGLE FONTS  FUNCTIONS // 
    //********************************//
     
    // Build the string of values in an Array
if ( ! function_exists( 'wfnews_getFontsData' ) ) {	
     function wfnews_getFontsData( $fontsString ) {   
     
        // Font data Extraction
        $googleFontsParam = new Vc_Google_Fonts();      
        $fieldSettings = array();
        $fontsData = strlen( $fontsString ) > 0 ? $googleFontsParam->_vc_google_fonts_parse_attributes( $fieldSettings, $fontsString ) : '';
        return $fontsData;
         
    }
}     
    // Build the inline style starting from the data
if ( ! function_exists( 'wfnews_googleFontsStyles' ) ) {		
     function wfnews_googleFontsStyles( $fontsData ) {
         
        // Inline styles
        $fontFamily = explode( ':', $fontsData['values']['font_family'] );
        $styles[] = 'font-family:' . $fontFamily[0];
		if($fontsData['values']['font_style']){
        $fontStyles = explode( ':', $fontsData['values']['font_style'] );
        $styles[] = 'font-weight:' . $fontStyles[1];
        $styles[] = 'font-style:' . $fontStyles[2];
        } 
        $inline_style = '';     
        foreach( $styles as $attribute ){           
            $inline_style .= $attribute.'; ';       
        }   
         
        return $inline_style;
         
    }
}     
    // Enqueue right google font from Googleapis
if ( ! function_exists( 'wfnews_enqueueGoogleFonts' ) ) {		
     function wfnews_enqueueGoogleFonts( $fontsData ) {
         
        // Get extra subsets for settings (latin/cyrillic/etc)
        $settings = get_option( 'wpb_js_google_fonts_subsets' );
        if ( is_array( $settings ) && ! empty( $settings ) ) {
            $subsets = '&subset=' . implode( ',', $settings );
        } else {
            $subsets = '';
        }
         
        // We also need to enqueue font from googleapis
        if ( isset( $fontsData['values']['font_family'] ) ) {
            wp_enqueue_style( 
                'vc_google_fonts_' . vc_build_safe_css_class( $fontsData['values']['font_family'] ), 
                '//fonts.googleapis.com/css?family=' . $fontsData['values']['font_family'] . $subsets
            );
        }
         
    }
}
/**************************
 End Function Google Fonts 
***************************/
#-----------------------------------------------------------------
# Modifying wfnews_wp_is_mobile function of WordPress
#-----------------------------------------------------------------
if ( ! function_exists( 'wfnews_wp_is_mobile' ) ) {
    function wfnews_wp_is_mobile()
    {
        $classes = get_body_class();
        static $is_mobile;
        if (empty($_SERVER['HTTP_USER_AGENT'])) {
            $is_mobile = false;
        } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false // many mobile devices (all iPhone, iPad, etc.)
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false
        ) {
            if (in_array('width_less_than_768', $classes)) {
                $is_mobile = false;
            } else {
                $is_mobile = false;
            }
        } else {
            $is_mobile = false;
        }
        return $is_mobile;
    }
}

// **********************************************************************//
// ! Excerpt and Content Limit
// **********************************************************************//
if ( ! function_exists( 'wfnews_excerpt' ) ) {
    function wfnews_excerpt($wordlimit)
    {
        $excerpt = get_the_excerpt();
        return $excerpt;
    }
}

// **********************************************************************//
// ! Category Styling Function
// **********************************************************************//
if ( ! function_exists( 'wfnews_all_category_styles' ) ) {
    function wfnews_all_category_styles( $sep = '', $echo = TRUE ) {

        if ( get_post_type() == 'post' ) {

            $output = ''; // temporary

            $category_code = array(); // temporary

            $cats = get_the_category();
            if ( ! empty($cats) && is_array($cats) ) {
                    foreach ( $cats as $cat_id => $cat ) {
                        if ( ! empty($cat) && is_array($cat) ) {
                            $cat_color = get_term_meta( $cat->cat_ID, '_category_color', true );
                        } else {
                            $cat_color = '';
                        }
                        $category_code[] = '<span style="background-color: #'.$cat_color.';" class="small-title-no-vc cat term-' . $cat->cat_ID . '"><a href="' . esc_url( get_category_link( $cat ) ) . '">' . esc_attr( $cat->name ) . '</a></span>';
                    }

                $output .= implode( $sep, $category_code );
                return $output;
            }else{
                return $output;
            }
        }elseif(get_post_type() == 'product'){
            $output = ''; // temporary

            $category_code = array(); // temporary

			global $product;

			$terms = get_the_terms( $product->get_id(), 'product_cat' );			

			foreach($terms as $term){
				$category_code[] = '<span  class="small-title-no-vc cat term-"><a href="">' . esc_attr($term->name) . '</a></span>';	
			}

			$output .= implode( $sep, $category_code );
			return $output;
            
		}
    }
}


if ( ! function_exists( 'wfnews_category_styles' ) ) {
    function wfnews_category_styles( $sep = '', $echo = TRUE ) {

        if ( get_post_type() == 'post' ) {

            $output = ''; // temporary

            $category_code = array(); // temporary

            $cats = get_the_category();
            if ( ! empty($cats) && is_array($cats) ) {
                    if ( $cats[0] ) {
                        if ( ! empty($cats[0]) && is_array($cats[0]) ) {
                            $cat_color = get_term_meta( $cats[0]->cat_ID, '_category_color', true );
                        } else {
                            $cat_color = '';
                        }

                        $category_code[] = '<span style="background-color: #'.$cat_color.';" class="small-title-no-vc cat term-' . $cats[0]->cat_ID . '"><a href="' . esc_url( get_category_link( $cats[0]->term_id ) ) . '">' . esc_attr( $cats[0]->cat_name ) . '</a></span>';

                    } else {
                        $category_code[] = '';
                    }

                $output .= implode( $sep, $category_code );
                return $output; // escaped before already
            }else{
                return $output;
            }
        }
    }
}

/******************
Post Types List
******************/
if ( ! function_exists( 'wfnews_post_types' ) ) {
    function wfnews_post_types()
    {
	$wfnews_types=array();
	$args = array();
	$output = 'objects'; // names or objects
	$post_types = get_post_types( $args, $output );
	foreach ( $post_types  as $post_type ) {
	    $wfnews_types[$post_type->name]= $post_type->name;
	}
	return $wfnews_types;
	}
}