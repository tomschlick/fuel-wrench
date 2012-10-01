<?php

class HttpServiceUnavailableException extends Fuel\Core\HttpException
{
	public function response()
	{
		\Log::debug('HttpServiceUnavailableException thrown because Wrench is active ('.Uri::current().')');
		return new \Response(\View::forge('error/503'), 503);
	}
}