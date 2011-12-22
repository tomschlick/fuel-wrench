<?php

/**
 * A Maintenance package for FuelPHP
 *
 * @package		Wrench
 * @version		1.0
 * @author		Tom Schlick (tom@tomschlick.com)
 * @link		http://github.com/tomschlick/fuel-wrench
 *
 */

Autoloader::add_classes(array(
	'Wrench' 							=> __DIR__.'/classes/wrench.php',
	'HttpServiceUnavailableException'   => __DIR__.'classes/httpserviceunavailableexception.php',
));