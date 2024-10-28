<?php

/**
 * This file is part of the contentful/laravel package.
 *
 * @copyright 2015-2024 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Presentcompany\ContentfulLaravel;

use Contentful\Core\Api\IntegrationInterface;
use Contentful\Management\Client;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class CMAServiceProvider extends ServiceProvider implements IntegrationInterface
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register any other events for your application.
     */
    public function boot()
    {
        $configFile = (string) realpath(__DIR__ . '/config/contentful-cma.php');

        $this->publishes([
            $configFile => $this->app->make('path.config').'/contentful-cma.php',
        ]);

        $this->mergeConfigFrom($configFile, 'contentful-cma');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton(Client::class, function (Application $app): Client {
            $token = $app['config']['contentful-cma.management.token'];

            $client = new Client($token);
            $client->useIntegration($this);

            return $client;
        });
    }

    public function provides()
    {
        return [Client::class];
    }

    public function getIntegrationName(): string
    {
        return 'contentful.laravel';
    }

    public function getIntegrationPackageName(): string
    {
        return 'presentcompany/contentful-laravel';
    }
}
