<?php 

require_once __DIR__ . "/vendor/autoload.php";

$router = new ExpressRouter\Router();

$router->get("/", function ($req, $res) { return $res->response(array("ok" => true, "tip" => "Use /articles")); });

$router->get("/articles", function ($req, $res) { return $res->response(array("example" => "list of articles")); });

$router->route(isset($_GET["path"]) ? $_GET["path"] : "");

?>