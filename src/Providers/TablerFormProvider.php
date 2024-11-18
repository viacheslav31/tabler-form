<?php


namespace Tabler\TablerForm\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Tabler\TablerForm\Console\Commands\TablerFormCommand;
use Tabler\TablerForm\View\Components\ButtonComponent;

class TablerFormProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // load routes, migrations,views,.....
        // dd('test');
        // load routes
        // https://laravel.com/docs/11.x/packages#routes

        //for views::tabler-form
        $this->loadRoutesFrom(__DIR__.'/../routes/form.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tabler-form');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        //component
        Blade::component('tabler-button', ButtonComponent::class);
        //publish views package: php artisan vendor:publish -> numberPackage
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/tabler-form'),
        ]);
        //config
        $this->publishes([
            __DIR__.'/../config/tabler-form.php' => config_path('tabler-form.php'),
        ]);
        //console command
        if ($this->app->runningInConsole()) {
            $this->commands([
                TablerFormCommand::class,
            ]);
        }
    }
}
