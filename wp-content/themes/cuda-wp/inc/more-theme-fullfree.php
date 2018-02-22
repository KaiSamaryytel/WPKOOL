<?php
/**
 * Admin welcome screen
 *
 * @package     More Wordpress theme
 * @subpackage  Includes
 * @author      Jahirul Islam Mamun
 * @link        http://www.codexcoder.com
 * @since       2.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * CodexCoder_More_Theme Class
 *
 * A general class for About and Credits page.
 *
 * @since 1.4
 */
class CodexCoder_More_Theme {

	/**
	 * @var string The capability users should have to view the page
	 */
	public $minimum_capability = 'manage_options';

	/**
	 * Get things started
	 *
	 * @since 1.0
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'admin_menus' ) );
		add_action( 'admin_init', array( $this, 'welcome' ) );
		add_action('admin_notices', array( $this, 'print_banner') );
		add_action('admin_head', array($this, 'load_style_script_on_header') );
	}


	/**
	 * Sends user to the Welcome page on theme activation
	 *
	 * @access public
	 * @since 1.0
	 * @return void
	 */
	public function welcome() {
		global $pagenow;
		if ( is_network_admin() || isset( $_GET['activate-multi'] ) ) {
			return;
		}
		if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' ) {
			wp_safe_redirect( admin_url( 'admin.php?page=more-theme' ) ); exit;
			exit;
		}
	}


	 /**
     * Print banner in dashboard pagina
     */
    public function print_banner() {
    	$banner = file_get_contents('http://static.codexcoder.com/global-banner/banner-json.json');
		$banner_json = json_decode($banner, true);
        ?>
             
        <a href="#" id="button">Hide/Show</a>
        <div class="grid">
        	<a href='<?php echo $banner_json['url']; ?>' target='_blank'>
        		<img style='max-width:100%' src='<?php echo $banner_json['banner-img']; ?>' alt='' />
        	</a>
        </div>
          	<div class="list"></div>
            

			<script>
				function setCookie(name, value, lifetime_days) {
					var exp = new Date();
					exp.setDate(new Date().getDate() + lifetime_days);
					document.cookie = name + '=' + value + ';expires=' + exp.toUTCString() + ';path=/';
				}

				function getCookie(name) {
					if(document.cookie) {
						var regex = new RegExp(escape(name) + '=([^;]*)', 'gm'),
						matches = regex.exec(document.cookie);
						if(matches) {
							return matches[1];
						}
					}
				}

				// show list if cookie exists
				if(getCookie('showlist')) {
					jQuery('.list').show();
					jQuery('.grid').addClass("hidden-div");
				} else {
					jQuery('.list').hide();
					jQuery('.grid').removeClass("hidden-div");
				}   

				// click handler to toggle elements and handle cookie
				jQuery('#button').click(function() {
				    // check the current state
				    if(jQuery('.list').is(':hidden')) {
				        // set cookie
				        setCookie('showlist', '1', 365);
				    } else {
				        // delete cookie
				        setCookie('showlist', '', -1);
				    }
				    // toggle
				    jQuery('.list').toggle();
				    jQuery('.grid').toggle();
				    return false;
				});

			</script>
              <?php
    }


	public function load_style_script_on_header() { ?>
		 <style>
            	a#button {
            		position: relative;
            		top: 1px;
            		float: right;
            		background-color: #fff;
            		padding: 5px;
            	}
            	.hidden-div{
            		display: none;
            	}
              </style>

	<?php }


	/**
	 * Register the Dashboard Pages which are later hidden but these pages
	 * are used to render the Welcome and Credits pages.
	 *
	 * @access public
	 * @since 1.4
	 * @return void
	 */
	public function admin_menus() {

		// more theme
		add_theme_page(
			__( 'More Themes', 'classy' ),
			__( 'More Themes', 'classy' ),
			$this->minimum_capability,
			'more-theme',
			array( $this, 'more_themes_screen' )
			);
		

	}

	
	
	/*
	* Pro screen
	*/
	public function more_themes_screen() {

		$json_data = file_get_contents('http://static.codexcoder.com/showcase/products.json');

		$json_decode = json_decode($json_data, true);


	 ?>
	
	
	<section id="header" class="header">
		<div class="container">
			<div class="header-padding">
				<div class="logo">
				<a href="<?php echo $json_decode['url']; ?>" target="_blank"><img src="<?php echo $json_decode['logo']; ?>" alt="logo"/></a>
				</div><!-- /.logo -->
			</div><!-- /.header-padding -->
		</div><!-- /.container -->
	</section><!-- /#header.header -->


	<section id="body-top" class="body-top">
		<div class="container">
			<div class="body-top-padding">
				<div class="heading-content">
					<h1 class="theme-heading">
						<?php echo $json_decode['title']; ?>
					</h1>

					<p class="themes-description">
						<?php echo $json_decode['description']; ?>
						</p><!-- /.themes-description -->
				</div><!-- /.heading-content -->
			</div><!-- /.body-top-padding -->
		</div><!-- /.container -->
	</section><!-- /#body-top.body-top -->


	<section id="body" class="body">
		<div class="container">
			<div class="body-padding">

				<?php 
				$themes = $json_decode['themes']; 
				foreach ($themes as $value) {

					?>

					<div class="body-items">

						<div class="img-top">
							<img src="<?php echo $value['img-top'] ?>" alt="body-img1">
						</div>


						<div class="img-middle">
						<img src="<?php echo $value['thumbnail'];?>" alt="<?php echo $value['name'];?>">
						</div><!-- /.img-top -->


						<div class="img-content">
							<h3 class="img-title">
								<?php echo $value['name'];?>
							</h3><!-- /.img-title -->
							<div class="two-link">
								<a href="<?php echo $value['demo'] ?>" target="_blank" class="demo-link">Demo</a>
								<a href="<?php echo $value['purchase'] ?>" target="_blank" class="download-link">Download</a>
							</div><!-- /.two-link -->
						</div><!-- /.img-content -->
					</div><!-- /.body-items -->
					<?php } ?>
				
			</div><!-- /.body-padding -->
		</div><!-- /.container -->
	</section>	<!-- /#body.body -->

<link rel="stylesheet" href="<?php echo $json_decode['css'] ?>">
	

	<?php }

	
}
new CodexCoder_More_Theme();