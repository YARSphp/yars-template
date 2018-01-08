<?php

namespace App;

use Yars\methods\Get;
use Yars\Page;
use Slim\Http\Response;
use Slim\Http\Request;

class __ping extends Page implements Get {
	public function get(Request $request, Response $response, $args) {
		return $response->withJson(["ping" => true]);
	}
}