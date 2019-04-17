<?php
namespace LaravelAdminExt\Select2\Theme;

use Encore\Admin\Admin;
use Illuminate\Support\ServiceProvider;

class LaravelAdminSelect2BootstrapThemServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes(
                [
                    __DIR__ . '/../resources/assets' => public_path('vendor/laravel-admin-ext/select2-bootstrap'),
                ],
                'laravel-admin-select2-bootstrap-theme'
            );
        }

        Admin::booted(function () {
            Admin::css('vendor/laravel-admin-ext/select2-bootstrap/css/select2-bootstrap.min.css');
            Admin::js('vendor/laravel-admin-ext/select2-bootstrap/js/select2-bootstrap.min.js');
        });
    }
}
