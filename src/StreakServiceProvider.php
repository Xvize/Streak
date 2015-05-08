<?php
namespace Xvize\Streak;

use Xvize\Streak\Streak;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class StreakServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * Boot the service provider.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/streak.php' => config_path('streak.php'),
        ]);

        AliasLoader::getInstance()->alias('Streak', 'Xvize\Streak\Streak');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Streak', function () {
            return new Streak();
        });
    }
    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [];
    }
}
