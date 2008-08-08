<?php
	/**
	 * Elgg Entity export.
	 * Displays an entity as JSON
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 */

	$entity = $vars['entity'];
	
	$export = new stdClass;
	
	foreach ($entity as $k => $v)
		$export->$k = $v;
		
	echo json_encode($export);
?>