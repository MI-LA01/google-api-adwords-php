Silex Provider - AdWords API Client
===================================

Currently only the v201306 is supported. ( will upgrade soonly )

What's in the box ?
-------------------
 - Refactorized lib of the google-api-adwords-php to support psr-0. 
 - A Silex Provider for the google-api-adwords-php

Installation
------------
git clone this reps under your vendor folder 

Autoload
--------

```php
$load = require_once __DIR__.'/../vendor/autoload.php';

$load -> add( 'Google', __DIR__. '/../vendor/google-api-adwords-php/src/'  );
$load ->register();
```
via Composer
------------
not yet implemented


Configuration ( MCC account mandatory ) 
---------------------------------------

```php
$app->register( new Google\Silex\AdwordsApiServiceProvider, array(
	'adwords.auth.developerToken' 	=> '__YOUR_TOKEN_HERE__',
	'adwords.auth.userAgent'	  	=> 'myUserAgent',
	'adwords.auth.clientCustomerId'	=> '694-xxx-xx70',
	'adwords.auth.oauth2'			=> array(
		'client_id' 		=> 'xxxxxxxxxx.apps.googleusercontent.com',
		'client_secret' 	=> 'myClientSecret',
		'refresh_token'		=> 'MyRefreshToken'
	)
));
```

Example with AWQL ( Prefered )
------------------------------

```php
$oAdGroupAdPage = $app['adwords']->GetAdGroupAdService()->query( "SELECT Id, Name, AdGroupId WHERE Id IN [ 3333333, 33333222, 33323232, 323234435 ]" );
```
of course this object could be used through the Symfony2 serializer to render xml or json representation. 