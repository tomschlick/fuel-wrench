<?php

class HttpServiceUnavailableException extends Fuel\Core\HttpException
{
	/**
	 * When this type of exception isn't caught this method is called by
	 * Error::exception_handler() to deal with the problem.
	 */
	public function handle()
	{
		$response = new \Response(\View::forge('503'), 503);
		\Event::shutdown();
		$response->send(true);
	}
}