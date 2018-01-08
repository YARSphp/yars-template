<?php

require_once("../vendor/autoload.php");

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if ($uri !== '/' && file_exists(__DIR__ . '/' . $uri)) {
	return false;
}


$server = new \Yars\Server();
$server->addSlug("/api/v1", "\\App", __DIR__ . "/../app/");
$server->useCache(true);
$server->trailingSlash(false);
$server->run();