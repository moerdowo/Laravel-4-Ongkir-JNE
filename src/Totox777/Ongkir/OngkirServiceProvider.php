<?php namespace Totox777\Ongkir;

use Illuminate\Support\ServiceProvider;

class OngkirServiceProvider extends ServiceProvider {

	protected $defer = false;

	public function boot()
	{
		$this->package('totox777/ongkir');
	}

	public function register()
	{
		$app = $this->app;

		$this->app['ongkir'] = $this->app->share(function($app)
	    {
	        return new Ongkir($app['config']->get('ongkir::apikey'));
	    });
	}

	public function provides()
	{
		return array();
	}

}