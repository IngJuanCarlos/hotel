<?php

namespace Hotel\Providers;

use Illuminate\Support\ServiceProvider;
use Library\Entities\Usuario;
use Library\Repository\UsuarioEloquent;

class LibraryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Library\Interfaces\UsuarioInterface', function($app)
        {
            return new UsuarioEloquent(new Usuario);
        });
    }
}
