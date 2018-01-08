<?php

namespace App\hello\_id;

use Slim\Http\Request;
use Slim\Http\Response;
use Yars\methods\CRUD;
use Yars\Page;

class test extends Page implements CRUD {
	public function get(Request $request, Response $response, $args) {
		if ($args["id"] == 43) {
			return $response->withJson(["id" => 43, "name" => "BMW 328", "price" => "400000"]);
		} else {
			return $this->error->e404($response, "Product not found");
		}
	}

	public function delete(Request $request, Response $response, $args) {
		return $response->withJson(["method" => "delete"]);
	}

	public function post(Request $request, Response $response, $args) {
		return $response->withJson(["method" => "post"]);
	}

	public function put(Request $request, Response $response, $args) {
		return $response->withJson(["method" => "put"]);
	}
}