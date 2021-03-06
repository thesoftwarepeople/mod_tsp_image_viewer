<?php
/*
 * TSP Image Viewer Joomla! module
 *
 * @package		TSP Image Viewer Joomla! module
 * @filename	mod_tsp_image_viewer.php
 * @version		1.0.0
 * @author		Sharron Denice, The Software People, LLC on 2013/02/09
 * @copyright	Copyright � 2013 The Software People, LLC (www.thesoftwarepeople.com). All rights reserved
 * @license		GNU Public License v3.0 (http://www.gnu.org/licenses/gpl-3.0.html)
 * @brief		module loader
 * 
 */

//no direct access
defined('_JEXEC') or die('Direct Access to this location is not allowed.');
 
// Step #1: include the helper file
require_once __DIR__ . '/helper.php';
 
// Step #2: get a parameter from the module's configuration
$viewer_width = $params->get('viewer_width');
$viewer_height = $params->get('viewer_height');
$main_image_width = $params->get('main_image_width');
$project_list_width = $params->get('project_list_width');
$thumb_width_height = $params->get('thumb_width_height');
 
// Step #3: get the items to display from the helper
$default_project = ModTSPImageViewerHelper::getProject(0);
$all_projects = ModTSPImageViewerHelper::getProjects();
 
$document = JFactory::getDocument();
$document->addScript('modules/mod_tsp_image_viewer/tmpl/js/jquery-1.3.2.min.js');
$document->addScript('modules/mod_tsp_image_viewer/tmpl/js/mod_tsp_image_viewer.js');
$document->addStyleSheet('modules/mod_tsp_image_viewer/tmpl/css/mod_tsp_image_viewer.css');

// Step #4: include the template for display
require(JModuleHelper::getLayoutPath('mod_tsp_image_viewer'));
?>