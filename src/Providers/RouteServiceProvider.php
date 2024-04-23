<?php

namespace ShippingServiceProviderTemplateRitter\Providers;

use Plenty\Plugin\RouteServiceProvider as PlentyRouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class RouteServiceProvider
 * @package ShippingServiceProviderTemplateRitter\Providers
 */
class RouteServiceProvider extends PlentyRouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        // $router->get('hello-world','ShippingServiceProviderTemplateRitter\Controllers\Controller@getHelloWorldPage');
    }
}
