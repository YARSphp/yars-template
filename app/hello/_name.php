<?php

namespace App\hallo;

use Yars\methods\Get;
use Yars\Page;
use Slim\Http\Response;
use Slim\Http\Request;

class _name extends Page implements Get {
	public function get(Request $request, Response $response, $args) {
		return $response->withJson(["message" => "Hello, " . $args["name"]]);
	}
}