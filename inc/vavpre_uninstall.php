<?php
/**
 * uninstall hook
 */
 register_uninstall_hook( __FILE__, array( 'Vavilon_preloader', 'vavpre_uninstall' ) );