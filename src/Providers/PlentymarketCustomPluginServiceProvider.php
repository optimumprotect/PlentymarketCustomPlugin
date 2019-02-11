<?php
 
namespace PlentymarketCustomPlugin\Providers;
 
 
use Plenty\Plugin\ServiceProvider;
 
class PlentymarketCustomPluginServiceProvider extends ServiceProvider
{
 
    /**
     * Register the service provider.
     */
 
    public function register()
    {
       $this->getApplication()->register(PlentymarketCustomPluginRouteServiceProvider::class);
    }
}
