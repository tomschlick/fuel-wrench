<?php

class HttpServiceUnavailableException extends Fuel\Core\HttpException
{
	public function response()
	{
		return new \Response(\View::forge('error/503'), 503);
	}
}