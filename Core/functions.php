<?php

use Core\Response;

function dd($value)
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';

  die();
}

function abort($statusCode = 404)
{
  http_response_code($statusCode);
  require base_path("views/{$statusCode}.view.php");
  exit();
}

function urlIs($value)
{
  return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $statusCode = Response::FORBIDDEN)
{
  if (! $condition) {
    abort($statusCode);
  }

  return true;
}

function routeToController($uri, $routes)
{
  if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
  } else {
    abort();
  }
}

function base_path($path)
{
  return BASE_PATH . $path;
}

function view($path, $data = [])
{
  extract($data);

  require base_path("views/$path");
}