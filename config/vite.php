<?php

use craft\helpers\App;

return [
    'checkDevServer' => true,
	'devServerInternal' => 'http://localhost:3000',
	'devServerPublic' => App::env('PRIMARY_SITE_URL') . ':3000',
	'useDevServer' => App::env('ENVIRONMENT') === 'dev' || App::env('CRAFT_ENVIRONMENT') === 'dev',
    'manifestPath' => '@webroot/dist/manifest.json',
    'serverPublic' => App::env('PRIMARY_SITE_URL') . '/dist/',
    'errorEntry' => '',
    'cacheKeySuffix' => '',
    'includeReactRefreshShim' => false,
    'includeModulePreloadShim' => true,
];
