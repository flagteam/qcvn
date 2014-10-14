<?php
/**
 * Loads attributes hooks.
 */
require_once vc_path_dir( 'PARAMS_DIR', '/textarea_html/textarea_html.php' );
require_once vc_path_dir( 'PARAMS_DIR', '/colorpicker/colorpicker.php' );
require_once vc_path_dir( 'PARAMS_DIR', '/loop/loop.php' );
require_once vc_path_dir( 'PARAMS_DIR', '/vc_link/vc_link.php' );
require_once vc_path_dir( 'PARAMS_DIR', '/options/options.php' );
require_once vc_path_dir( 'PARAMS_DIR', '/sorted_list/sorted_list.php' );
require_once vc_path_dir( 'PARAMS_DIR', '/css_editor/css_editor.php' );
require_once vc_path_dir( 'PARAMS_DIR', '/tab_id/tab_id.php' );


global $vc_params_list;
$vc_params_list = array( 'textarea_html', 'colorpicker', 'loop', 'vc_link', 'options', 'sorted_list', 'css_editor', 'tab_id' );
