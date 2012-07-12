<?php
/**
 * Copyright (c) 2011 Max Kamashev <max.kamashev@gmail.com>
 * Distributed under the GNU GPL v3. For full terms see the file COPYING.
 */

/**
 * @var $app Silex\Application()
 */



$app->get( '/', function() use ( $app ) {
    return $app['twig']->render('layout.twig', array(
        'content' => 'indexa',
    ));
});

$app->get( '/about', function() use ( $app ) {
	return 'ABOUT';
});

$app->get( '/help', function() use ( $app ) {
	return 'HELP';
});

$app->get( '/hello/{name}', function($name) use($app) {

    return $app['twig']->render('hello.twig', array(
        'name' => $app->escape( $name ),
    ));
});

$app->match();