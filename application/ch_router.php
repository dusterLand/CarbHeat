<?php
// Routing
$request_uri = $_SERVER['REQUEST_URI'];
ch_bs_log( $request_uri, '$request_uri' );

$routes = array();
$routefile = fopen( dirname(__FILE__) . '/../share/config/routes', 'r');
if( $routefile ) {
	while(( $line = fgets( $routefile )) !== false ) {
		$routeComponents = explode( ', ', $line );
		$routes[ trim($routeComponents[0]) ] = trim($routeComponents[1]);
	}
}
fclose( $routefile );

ch_bs_log( $routes, '$routes' );
ch_bs_log( (string)($request_uri), 'casted to string' );
ch_bs_log( array_keys( $routes ), 'array keys' );
// hackish BS to make this match preg_matches below
$request_uri = '\'' . $request_uri . '\'';

if( in_array( $request_uri, array_keys( $routes ))) {
	ch_bs_log( 'URI is in routes');
	$request = $_REQUEST;
	$destination_segments = explode( '\\', $routes[ $request_uri ] );
	ch_bs_log( $destination_segments[ count( $destination_segments ) - 1 ], 'second to last segment' );
	if( preg_match( '/Controller/', $destination_segments[ count( $destination_segments ) - 1 ])) {
		ch_bs_log( 'Controller display called' );
		$targetController = new $routes[ $request_uri ]();
		ch_bs_log( $targetController, 'Controller object' );
//		$targetController->displayPage();
		$targetFunction = 'Index';
	} else if( preg_match( '/Controller/', $destination_segments[ count( $destination_segments ) - 2 ])) {
		ch_bs_log( 'Controller function called' );
		$targetFunction = array_pop( $destination_segments );
		$targetController = implode( '\\', $destination_segments );
		ch_bs_log( $targetController, 'Controller route' );
		ch_bs_log( $targetFunction, 'Controller function' );
	}
	$controllerObj = new $targetController( $smarty );
	ch_bs_log( $targetController, 'Controller object' );
	$controllerObj->$targetFunction();
} else {
	ch_bs_log( 'URI is NOT in routes, display front page' );
	$targetController = new CarbHeat\Controller\CarbHeatMain\CarbHeatController( $smarty );
	$targetController->Index( $smarty );
}
