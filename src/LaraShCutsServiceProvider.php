<?php

namespace LaraShCutsServiceProvider;

use Illuminate\Support\ServiceProvider;
use LaraShCutsServiceProvider\Commands\MakeCrudCommand;

class LaraShCutsServiceProvider extends ServiceProvider
{
    /**
     * Service Provider register method
     */
    public function register()
    {
        $this->commands([
            MakeCrudCommand::class
        ]);
    }

    /**
     * Service Provider boot actions
     */
    public function boot()
    {
        // Do nothing
    }
}