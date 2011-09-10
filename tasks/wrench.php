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

 namespace Fuel\Tasks;

 class Wrench {

 	static $file = APPPATH.'/tmp/wrench-downtime.txt';

 	public static function run()
 	{
 		if(file_exists(static::$file))
 		{
 			static::finish();
 		}
 		else
 		{
 			static::start();
 		}
 	}

 	public static function finish()
 	{
 		if(file_exists(static::$file))
 		{
 			unlink(static::$file);
 			\Cli::write('Site out of maintenance mode.', 'green');
 		}
 	}

 	public static function start()
 	{
 		if(!file_exists(static::$file))
 		{
 			file_put_contents($file, 'down');
 			\Cli::write('Site in maintenance mode.', 'green');
 		}
 	}

 	public static function help()
 		{
 			echo <<<HELP
Usage:
    php oil refine wrench
    php oil refine wrench:start
    php oil refine wrench:finish

Fuel options:


Description:
	The wrench task will toggle the site on/off for maintenance.

Examples:
    php oil r wrench

HELP;

 		}

 }