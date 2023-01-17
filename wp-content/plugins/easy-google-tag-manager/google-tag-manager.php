<?php
/*
Plugin Name: Easy Google Tag Manager
Plugin URI: http://wordpress.org/extend/plugins/easy-google-tag-manager/
Description: Habilite o <a href="http://www.google.com/tagmanager/" target="_blank">Google Tag Manager</a> em todo seu site WordPress.
Version: 1.2.7
Author: Luiz Jr
Author URI: https://luiz.io
License: GPLv2 or later
*/

class google_tag_manager {

	public static $printed_noscript_tag = false;

	public static function go() {
		add_filter( 'admin_init',     array( __CLASS__, 'registrando_campos' ) );
		add_action( 'wp_head',        array( __CLASS__, 'print_tag' ) );
		add_action( 'genesis_before', array( __CLASS__, 'print_noscript_tag' ) ); // Genesis
		add_action( 'tha_body_top',   array( __CLASS__, 'print_noscript_tag' ) ); // Theme Hook Alliance
		add_action( 'body_top',       array( __CLASS__, 'print_noscript_tag' ) ); // THA Unprefixed
		add_action( 'wp_footer',      array( __CLASS__, 'print_noscript_tag' ) ); // Fallback!
	}
	public static function registrando_campos() {
		register_setting( 'general', 'google_tag_manager_id', 'esc_attr' );
		add_settings_field( 'google_tag_manager_id', '<label for="google_tag_manager_id">' . __( 'Google Tag Manager ID' , 'google_tag_manager' ) . '</label>' , array( __CLASS__, 'campos_html') , 'general' );
	}
	public static function campos_html() {
		?>
		<input type="text" id="google_tag_manager_id" name="google_tag_manager_id" placeholder="GTM-XXXXXXX" class="regular-text code" value="<?php echo get_option( 'google_tag_manager_id', '' ); ?>" />
		<p class="description"><?php _e( 'O ID do código fornecido pelo Google (como enfatizado):', 'google_tag_manager' ); ?><br />
			<code>&lt;noscript&gt;&lt;iframe src="//www.googletagmanager.com/ns.html?id=<strong style="color:#c00;">GTM-XXXXXXX</strong>"</code></p>
		<p class="description"><?php _e( 'Você pode obter o seu <a href="https://www.google.com/tagmanager/" target="_blank">aqui</a>!', 'google_tag_manager' ); ?></p>
		<?php
	}
	public static function print_tag() {
		if ( ! $id = get_option( 'google_tag_manager_id', '' ) ) return;
		?>
<!-- Iniciando Codigo do Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','<?php echo esc_js( $id ); ?>');</script>
<!-- Fechando Codigo do Google Tag Manager -->
		<?php
	}
	public static function print_noscript_tag() {
		// Make sure we only print the noscript tag once.
		// This is because we're trying for multiple hooks.
		if ( self::$printed_noscript_tag ) {
			return;
		}
		self::$printed_noscript_tag = true;

		if ( ! $id = get_option( 'google_tag_manager_id', '' ) ) return;
		?>
<!-- Iniciando Codigo do Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo esc_attr( $id ); ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- Fechando Codigo do Google Tag Manager (noscript) -->
		<?php
	}
}

google_tag_manager::go();
