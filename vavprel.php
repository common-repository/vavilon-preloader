<?php
/*
	Plugin Name: Vavilon Preloader
	Description: Начальная анимационная иконка до полной загрузки сайта
	Version: 2.3
	Author: VAVILON STUDIO
	Author URI: https://site.kharkov.ua/
	Plugin URI: https://site.kharkov.ua/plagin-vavilon-preloader/
	FAQ: https://ru.wordpress.org/plugins/vavilon-preloader/#faq
	
	Copyright 2017  Vavilon Studio  (email: andreypyrko45@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
	define('VAVPRE_PATH', plugin_dir_path( __FILE__ ));
	define('VAVPRE_DIR', plugin_dir_path(__FILE__)); 
	define('VAVPRE_URL', plugins_url(__FILE__));
	
	function vavpre_scripts_basic()  
		{  
			wp_enqueue_script( 'jquery' );  
			
			wp_register_script( 'app', plugins_url( '/js/app.js', __FILE__ ));  
			wp_enqueue_script( 'app' );
						
			wp_register_style( 'vavpre', plugins_url( '/css/vavpre.css', __FILE__ ) );  
			wp_enqueue_style( 'vavpre' ); 
			
			echo '<div id="p_prldr">
					<div class="cssload-loader">
					  <div class="cssload-inner cssload-one"></div>
					  <div class="cssload-inner cssload-two"></div>
					  <div class="cssload-inner cssload-three"></div>
					</div>
				  </div>';
		}  
		add_action( 'wp_enqueue_scripts', 'vavpre_scripts_basic' );
		
		// setting page
		require VAVPRE_PATH."inc/vavpre_option_page.php";
		// uninstall hook
		require VAVPRE_PATH."inc/vavpre_uninstall.php";

?>