# Contentful Laravel Package

## Reworked by Will Walsh for Present Company Pty Ltd

### Intention

- [x] Add the Contentful Content Management SDK into the package and create another Service Provider
- [ ] Test with a new Laravel project

> This library provides an easy-to-use integration between the Laravel framework and the Contentful Delivery SDK. It requires PHP 8.0 and up.

## Setup

Add this package to your application by including this in your `composer.json` file:

``` json
{
    "name": "mynamespace/my-project-that-uses-contentful-laravel",
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/presentcompany/contentful-laravel.git"
        }
    ],
    "require": {
        "presentcompany/contentful-laravel": "dev-main"
    }
}
```

Add the service provider to the `providers` array in `config/app.php`:

``` php
'providers' => [
    Presentcompany\ContentfulLaravel\CDAServiceProvider::class,
    Presentcompany\ContentfulLaravel\CMAServiceProvider::class,
],
```

## Configuration

Publish the config file:

``` sh
php artisan vendor:publish --provider="Presentcompany\ContentfulLaravel\CDAServiceProvider"
php artisan vendor:publish --provider="Presentcompany\ContentfulLaravel\CMAServiceProvider"
```

This will add `contentful-cda.php` and `contentful-cma.php` files to your `/config` folder. Next, add your space ID and API key to your `.env` file:

    CONTENTFUL_DELIVERY_SPACE_ID="cfexampleapi"
    CONTENTFUL_DELIVERY_TOKEN="b4c0n73n7fu1"
    CONTENTFUL_MANAGEMENT_TOKEN="b4c0n73n7fu1"

## What is Contentful?

[Contentful](https://www.contentful.com) provides a content infrastructure for digital teams to power content in websites, apps, and devices. Unlike a CMS, Contentful was built to integrate with the modern software stack. It offers a central hub for structured content, powerful management and delivery APIs, and a customizable web app that enable developers and content creators to ship digital products faster.

## License

Copyright (c) 2015-2019 Contentful GmbH. Code released under the MIT license. See [LICENSE](LICENSE) for further details.
