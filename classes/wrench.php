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

class Wrench {

	public static function _init()
	{
		if(file_exists(APPPATH.'/tmp/wrench-downtime.txt') and !defined('STDIN'))
		{
			throw new HttpServiceUnavailableException;
		}
	}

}