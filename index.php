<?php
 
// framework/index.php
 
require_once __DIR__.'/vendor/autoload.php'; // use the Symfony 2.2.x autoloader
 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
 
$request = Request::createFromGlobals();
 
$input = $request->get('name', 'Wonderful World');

$bob='';
$temp = get_class_methods(new Request());
$counter=1;
foreach($temp as $method)
	$bob .= $counter++ . '. ' . $method . '();<br />';
$response = new Response(sprintf('Hello %s<br /><hr><br />' . '<strong>The methods of the Request class are:</strong><br /><br />' . $bob, htmlspecialchars($input, ENT_QUOTES, 'UTF-8')));


$response->send();