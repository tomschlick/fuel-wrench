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

	public function _init()
	{
		if(file_exists(APPPATH.'/tmp/wrench-downtime.txt') and !defined('STDIN'))
		{
			header('Status: 503 Service Unavailable');

			echo <<<MESSAGE
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Down for Maintenance</title>
	<style type="text/css">
		* { margin: 0; padding: 0; }
		body { background-color: #EEE; font-family: sans-serif; font-size: 16px; line-height: 20px; margin: 40px; }
		#wrapper { padding: 30px; background: #fff; color: #333; margin: 0 auto; width: 800px; }
		h1 { color: #000; font-size: 55px; padding: 0 0 25px; line-height: 1em; }
		.intro { font-size: 22px; line-height: 30px; font-family: georgia, serif; color: #555; padding: 29px 0 20px; border-top: 1px solid #CCC; }
		p { margin: 0 0 15px; line-height: 22px;}
	</style>
</head>
<body>
	<div id="wrapper">
		<h1>Down for Maintenance</h1>
		<p class="intro">Please try again in a few minutes.</p>
	</div>
</body>
</html>

MESSAGE;
			exit;
		}
	}

}