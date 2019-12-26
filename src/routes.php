<?php
$config = Config::get('ckfinder.urlPrefix');
if(isset($config) && is_string($config) || is_null($config)) {	
	$config = '';
}
Route::group(['prefix' => $config], function () {
	Route::any('/ckfinder/connector', 'CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
	    ->name('ckfinder_connector');

	Route::any('/ckfinder/browser', 'CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
	    ->name('ckfinder_browser');

	//Route::any('/ckfinder/examples/{example?}', 'CKSource\CKFinderBridge\Controller\CKFinderController@examplesAction')
	//    ->name('ckfinder_examples');
});