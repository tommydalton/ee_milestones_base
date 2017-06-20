<?php
/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2003 - 2015, EllisLab, Inc.
 * @license		http://ellislab.com/expressionengine/user-guide/license.html
 * @link		http://ellislab.com
 * @since		Version 2.0
 */

/*
 * --------------------------------------------------------------------
 *  System Path
 * --------------------------------------------------------------------
 *
 * The following variable contains the server path to your
 * ExpressionEngine "system" folder.  By default the folder is named
 * "system" but it can be renamed or moved for increased security.
 * Indicate the new name and/or path here. The path can be relative
 * or it can be a full server path.
 *
 * http://ellislab.com/expressionengine/user-guide/installation/best_practices.html
 *
 */
	$system_path = '../chicago/system';


/*
 * --------------------------------------------------------------------
 *  Multiple Site Manager
 * --------------------------------------------------------------------
 *
 * Uncomment the following variables if you are using the Multiple
 * Site Manager: http://ellislab.com/expressionengine/user-guide/cp/sites
 *
 * Set the Short Name of the site this file will display, the URL of
 * this site's admin.php file, and the main URL of the site (without
 * index.php)
 *
 */
    $assign_to_config['site_name'] = 'annika';
    $assign_to_config['cp_url']    = 'http://annikadalton.com/admin.php';
    $assign_to_config['site_url'] = 'http://annikadalton.com';


/*
 * --------------------------------------------------------------------
 *  Error Reporting
 * --------------------------------------------------------------------
 *
 * PHP and database errors are normally displayed dynamically based
 * on the authorization level of each user accessing your site.
 * This variable allows the error reporting system to be overridden,
 * which can be useful for low level debugging during site development,
 * since errors happening before a user is authenticated will not normally
 * be shown.  Options:
 *
 *	$debug = 0;  Default setting. Errors shown based on authorization level
 *
 *	$debug = 1;  All errors shown regardless of authorization
 *
 * NOTE: Enabling this override can have security implications.
 * Enable it only if you have a good reason to.
 *
 */
	$debug = 0;

/*
 * --------------------------------------------------------------------
 *  CUSTOM CONFIG VALUES
 * --------------------------------------------------------------------
 *
 * The $assign_to_config array below will be passed dynamically to the
 * config class. This allows you to set custom config items or override
 * any default config values found in the config.php file.  This can
 * be handy as it permits you to share one application between more then
 * one front controller file, with each file containing different
 * config values.
 *
 * Un-comment the $assign_to_config array below to use this feature
 *
 * NOTE: This feature can be used to run multiple EE "sites" using
 * the old style method.  Instead of individual variables you'll
 * set array indexes corresponding to them.
 *
 */
//	$assign_to_config['template_group'] = '';
//	$assign_to_config['template'] = '';
//	$assign_to_config['site_index'] = '';
//	$assign_to_config['site_404'] = '';
//	$assign_to_config['global_vars'] = array(); // This array must be associative

	$assign_to_config['global_vars']['language'] = 'english';
	$assign_to_config['global_vars']['language_code'] = 'en';
	$assign_to_config['global_vars']['language_alias'] = 'english';
    $assign_to_config['disable_csrf_protection'] = 'y';

/*
 * --------------------------------------------------------------------
 *  CE IMAGE CONFIGURATION
 * --------------------------------------------------------------------
 */

//	$assign_to_config['global_vars']['ce_image_document_root'] = '/home2/rootleve/public_html/annikadalton/';
//	$assign_to_config['ce_image_src_regex'] = array( 
//	  '^http://rootleveldevelopment.com/' => '/home2/rootleve/public_html/chicago/',
//	  '^http://annikadalton.com/' => '/home2/rootleve/public_html/annikadalton/',
//	  '^http://kyle-and-molly.com/' => '/home2/rootleve/public_html/kyle-and-molly/',
//	  '^http://gracescannell.com/' => '/home2/rootleve/public_html/gracescannell/'
//	);
//	$assign_to_config['global_vars']['ce_image_made_regex'] = array();
//	$assign_to_config['global_vars']['ce_image_encode_urls'] = 'no';
//	$assign_to_config['global_vars']['ce_image_disable_xss_check'] = 'yes';
//	$assign_to_config['global_vars']['ce_image_add_dims'] = 'no';
/*
|--------------------------------------------------------------------------
| Encryption Key
|--------------------------------------------------------------------------
|
| If you use the Encryption class or the Sessions class with encryption
| enabled you MUST set an encryption key.  See the user guide for info.
|
*/
$config['encryption_key'] = 'vuSlqfigAdfp2JXuxmF9pJB50XeR1wCY';
 
$config['force_query_string'] = 'n';
$config['function_trigger'] = 'M';
 
/*
 *---------------------------------------------------------------
 * APP GLOBAL VARIABLES
 *---------------------------------------------------------------
 */
  
 $assign_to_config['global_vars'] = array(
 'app_url' => 'http://annikadalton.com/?/',
 'forced_query'  => '?/',
 'gv_site-id'  => '2',
 'gv_site-name'  => 'annika',
 'gv_vid-dir'  => '30',
 'gv_aud-dir'  => '45',
 'gv_img-dir'  => '29',
 'gv_css-dir'  => '36',
 'gv_att-dir'  => '33',
 'gv_lom-id'  => '3',
 'gv_formsec'  => 'no',
 'gv_appname'  => 'Milestones',
 'gv_appdesc'  => 'Photo Journal and Interactive Timeline',
 'copyright-year'  => '2016',
 'copyright-name'  => 'Root Level Development'
  ); 

/*
 * --------------------------------------------------------------------
 *  END OF USER CONFIGURABLE SETTINGS.  DO NOT EDIT BELOW THIS LINE
 * --------------------------------------------------------------------
 */


/*
 * ---------------------------------------------------------------
 *  Disable all routing, send everything to the frontend
 * ---------------------------------------------------------------
 */
	$routing['directory'] = '';
	$routing['controller'] = 'ee';
	$routing['function'] = 'index';

/*
 * --------------------------------------------------------------------
 *  Mandatory config overrides
 * --------------------------------------------------------------------
 */
	$assign_to_config['subclass_prefix'] = 'EE_';

/*
 * --------------------------------------------------------------------
 *  Resolve the system path for increased reliability
 * --------------------------------------------------------------------
 */

	if (realpath($system_path) !== FALSE)
	{
		$system_path = realpath($system_path).'/';
	}

	// ensure there's a trailing slash
	$system_path = rtrim($system_path, '/').'/';

	// Is the sytsem path correct?
	if ( ! is_dir($system_path))
	{
		exit("Your system folder path does not appear to be set correctly. Please open the following file and correct this: ".pathinfo(__FILE__, PATHINFO_BASENAME));
	}

/*
 * --------------------------------------------------------------------
 *  Now that we know the path, set the main constants
 * --------------------------------------------------------------------
 */
	// The name of THIS file
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

	// The PHP file extension
	define('EXT', '.php');

 	// Path to the system folder
	define('BASEPATH', str_replace("\\", "/", $system_path.'codeigniter/system/'));

	// Path to the "application" folder
	define('APPPATH', $system_path.'expressionengine/');

	// Path to the front controller (this file)
	define('FCPATH', str_replace(SELF, '', __FILE__));

	// Name of the "system folder"
	define('SYSDIR', trim(strrchr(trim(str_replace("\\", "/", $system_path), '/'), '/'), '/'));

	// The $debug value as a constant for global access
	define('DEBUG', $debug);  unset($debug);

/*
 * --------------------------------------------------------------------
 *  Set the error reporting level
 * --------------------------------------------------------------------
 */
	if (DEBUG == 1)
	{
		error_reporting(E_ALL);
		@ini_set('display_errors', 1);
	}
	else
	{
		error_reporting(0);
	}

/*
 *---------------------------------------------------------------
 * LOAD THE BOOTSTRAP FILE
 *---------------------------------------------------------------
 *
 * And away we go...
 *
 */
	require_once BASEPATH.'core/CodeIgniter'.EXT;

/* End of file index.php */
/* Location: ./index.php */
