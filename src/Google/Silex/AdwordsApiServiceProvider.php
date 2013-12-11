<?php

/*
 * This file is part of the Google Adwords API package.
 *
 * (c) Alexis Gruet <alexis.gruet@kroknet.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Google\Silex;

use Silex\Application
  , Silex\ServiceProviderInterface
  , Google\Api\Ads\AdWords\Lib\AdWordsUser
  , Google\Api\Ads\AdWords\v201306\Common\Selector;

class AdwordsApiServiceProvider implements ServiceProviderInterface
{
	protected $prefix;
	
	/**
	 * @param string $prefix Prefix name used to register the service provider in Silex.
	 */
	public function __construct( $prefix = 'adwords' )
	{
		if (empty($prefix)) {
			throw new InvalidArgumentException('The specified prefix is not valid.');
		}
	
		$this->prefix = $prefix;
	}
	
	public function boot(Application $app) {}
	
	
	public function register(Application $app)
	{
		$prefix = $this->prefix;
		
		$app[ "$prefix" ] = $app->share( function() use( $app, $prefix ) { 
			
			return new AdWordsUser( null, null, null, $app[ "$prefix.auth.developerToken" ], null,
				$app[ "$prefix.auth.userAgent" ], $app[ "$prefix.auth.clientCustomerId" ], null, null, $app[ "$prefix.auth.oauth2" ]);
			
		});
		
		$app[ "$prefix.selector" ] = function() {
			return new Selector;
		};
	}
		
		
}

