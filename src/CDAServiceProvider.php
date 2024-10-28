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
use Contentful\Delivery\Client;
use Contentful\Delivery\ClientOptions;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class CDAServiceProvider extends ServiceProvider implements IntegrationInterface
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
        $configFile = (string) realpath(__DIR__ . '/config/contentful-cda.php');

        $this->publishes([
            $configFile => $this->app->make('path.config').'/contentful-cda.php',
        ]);

        $this->mergeConfigFrom($configFile, 'contentful-cda');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton(Client::class, function (Application $app): Client {
            $config = $app['config'];

            $options = new ClientOptions();
            if ($config['contentful-cda.delivery.preview']) {
                $options->usingPreviewApi();
            }

            if ($config['contentful-cda.delivery.defaultLocale']) {
                $options->withDefaultLocale($config['contentful-cda.delivery.defaultLocale']);
            }

            if (\is_callable($config['contentful-cda.delivery.options'])) {
                ($config['contentful-cda.delivery.options'])($options, $app);
            }

            $client = new Client(
                $config['contentful-cda.delivery.token'],
                $config['contentful-cda.delivery.space'],
                $config['contentful-cda.delivery.environment'],
                $options
            );
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
