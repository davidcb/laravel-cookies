<?php

namespace Davidcb\Cookies\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class CookiesController extends Controller {

	public function setLegalCookie()
	{
		$response = new Response('Set cookie');
		$response->withCookie(cookie(config('cookies.name'), 1, intval(config('cookies.duration_days')) * 24 * 60));
		return $response;
	}

}
