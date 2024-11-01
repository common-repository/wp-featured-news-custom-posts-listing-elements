<?php
/* -----------------------------------------------------------------------------
 * Extra Settings in Settings > Design Settings Page
 * -------------------------------------------------------------------------- */
add_action('admin_enqueue_scripts', 'wfnews_custom_admin_css'); // add css to admin page
function wfnews_custom_admin_css() {
	wp_enqueue_script( 'wfnews-admin-js', plugins_url( 'js/wfnews-admin-js.js', __FILE__ ), array(), '1.0' );
	wp_enqueue_style( 'wfnews-admin-style', plugins_url( 'css/wfnews-admin-style.css', __FILE__ ) );
}

add_action('admin_menu', 'wfnews_about_settings_submenu_page');
function wfnews_about_settings_submenu_page() {
    add_menu_page(
        'WP Featured News',
        'WP Featured News',
        'manage_options',
        'wfnews-about',
        'wfnews_about_submenu_page_callback',
		'dashicons-welcome-widgets-menus');
}

function wfnews_about_submenu_page_callback() {

//must check that the user has the required permission 
    if (!current_user_can('manage_options'))
    {
      wp_die( esc_html__('You do not have sufficient permissions to access this page.', 'wfnews') );
    }

?>

<div class="wrap panto-page-welcome about-wrap">
<h1 class="title"><?php echo sprintf( esc_html__( 'Welcome to WP Featured News - Version %s', 'wfnews' ), preg_replace( '/^(\d+)(\.\d+)?(\.\d)?/', '$1$2', WFNEWS_PLUGIN_VERSION ) ) ?></h1>
<div class="about-text"><?php esc_html_e('Congratulations! You are about to use most powerful plugin for featuring your Posts.', 'wfnews') ?></div>
<div class="wp-badge vc-page-logo"><?php esc_html_e('Version ', 'wfnews');?><?php echo WFNEWS_PLUGIN_VERSION; ?></div>
<hr />

<div class="row">
  <div class="col-md-6">
    <div class="boxed-content">
		<h2 class="about-title"><strong><?php esc_html_e('WP Featured News', 'wfnews');?><br><?php esc_html_e('PRO Version Features', 'wfnews');?></strong></h2>

<ul>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('All the features of the Free version are also available in the Pro version. In addition, the following features are extra in Pro version:', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('More than 31 uniquely designed Post Blocks and a Popular Posts widget and Google AdSense widget', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Change/Choose Heading and Heading styles. 13 different heading styles available for each Post Block.', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Choose which Title Tag (H1, H2, H3, H4, H5, H6) you want to use. Important for SEO', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Select Next – Prev button switch with Ajax results. Clicking on "Next" OR "Previous" button will show you necessary posts without reloading the whole page', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Select Tab options switch with Ajax results. You can show different categories in different tabs of a Post Block', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Use Ajax Load More button to show More Posts without reloading/refreshing the page', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Large Post Title Limit control. Control how many characters of the post title you want to show for the large post.', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Large Post Excerpt Limit set. Control how many words of the post excerpt you want to show for the large post.', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Choose Large Post Title Color', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Small Posts Title Limit Set. Control how many characters of the post title you want to show for the small posts.', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Small Posts Excerpt Limit Set. Control how many words of the post excerpt you want to show for the small posts.', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Choose Block Active Tab color', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Choose Block Heading color', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Choose Block Heading Background Color', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Choose Heading Border Color', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Hundreds of Google Fonts available to use for Titles/Content of all Post Blocks', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Change/Choose Font Family, Font Size, Font Weight and Line Height for Title', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Change/Choose Font Family, Font Size, Font Weight and Line Height for Headline', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Change/Choose Font Family, Font Size, Font Weight and Line Height for Meta', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Change/Choose Font Family, Font Size, Font Weight and Line Height for Excerpt', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Change/Choose Font Family, Font Size, Font Weight and Line Height for Button', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('Priority Support usual respond time is less than 24 hours', 'wfnews');?></li>
<li><i class="glyphicon glyphicon-ok"></i> <?php esc_html_e('And more..', 'wfnews');?></li>
</ul>
<p class="dpointer"><a href="https://codecanyon.net/item/wp-featured-news-pro-custom-posts-listing-plugin/24515933?ref=fluent-themes" target="_blank"><button type="submit" id="Submit" class="ft-btn ft-btn-success"><?php esc_html_e('BUY PRO VERSION', 'wfnews');?> <i class="glyphicon glyphicon-star"></i></button></a>
<a href="https://flbaisha.com/cplugin/wp-featured-news/" target="_blank"><button type="submit" id="Submit" class="ft-btn ft-btn-success"><?php esc_html_e('VIEW PRO DEMO', 'wfnews');?> </button></a>
		</p>
	</div>
</div>
<div class="col-md-6">

	<div class="col screenshot-image">
		<a href="https://codecanyon.net/item/wp-featured-news-pro-custom-posts-listing-plugin/24515933?ref=fluent-themes" target="_blank"><img src="<?php echo plugins_url( 'images/preview-image.jpg', __FILE__ ); ?>"></a>
		<br><br><br><a href="https://codecanyon.net/item/wp-featured-news-pro-custom-posts-listing-plugin/24515933?ref=fluent-themes" target="_blank"><img src="<?php echo plugins_url( 'images/preview-image.jpg', __FILE__ ); ?>"></a>
	</div>
</div>
</div>
</div>
<?php
}