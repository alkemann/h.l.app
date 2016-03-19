<?php

use alkemann\hl\core\Router;
use alkemann\hl\core\Request;
use alkemann\hl\core\Response;

Router::alias('/', 'home');

// Add alias routes here
// Router::alias('/index', 'home');
// Router::alias('/start', 'some/thing/deep');
// Router::alias('/place', 'some/thing/deep');

// // Add custom routes for creating APIs
// $api = function(Request $request) {
// 	return new Response(['id'=> 12, 'title'=> 'Test']);
// };
// // Regex matcher, $closure, method(s)
// Router::add('|^api(\.json)?/?$|', $api, [Request::GET]);