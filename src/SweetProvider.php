<?php

namespace LaravelSweet;

use Illuminate\Support\ServiceProvider;
use LaravelSweet\Traits\SweetHelper;

class SweetProvider extends ServiceProvider
{
    use SweetHelper;
    public function boot()
    {
        $this->files();
    }
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {

    }
    public function files()
    {
        require __DIR__ . '/Files/Helper.php';
    }
}