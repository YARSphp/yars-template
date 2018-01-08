<?php

namespace App\world;

use Slim\Http\Request;
use Slim\Http\Response;
use Yars\methods\Get;
use Yars\Page;

class hello extends Page implements Get {
	public function get(Request $request, Response $response, $args) {
		return $response->withJson(["message" => "Hello, Dude"]);
	}
}