<?php

namespace LarashCutsServiceProvider;

use Illuminate\Support\ServiceProvider;
use LarashCuts\Commands\MakeCrudCommand;

class LarashCutsServiceProvider extends ServiceProvider
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