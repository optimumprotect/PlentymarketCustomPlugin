<?php
 
namespace PlentymarketCustomPlugin\Providers;
 
 
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
 
class PlentymarketCustomPluginRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
       public function map(Router $router)
    {
        $router->get('hello','PlentymarketCustomPlugin\Controllers\ContentController@sayHello');
    }
    }
}
