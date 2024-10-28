<?php

/**
 * This file is part of the presentcompany/contentfullaravel package.
 *
 * @copyright 2024 Will Walsh - Present Company
 * @license   MIT
 */

declare(strict_types=1);

return [
    'delivery' => [
        /*
         * An API key for the above specified space.
         */
        'token' => env('CONTENTFUL_DELIVERY_TOKEN'),

        /*
         * The ID of the space you want to access.
         */
        'space' => env('CONTENTFUL_DELIVERY_SPACE_ID'),

        /*
         * The ID of the environment you want to access.
         */
        'environment' => env('CONTENTFUL_DELIVERY_ENVIRONMENT_ID', 'master'),

        /*
         * Controls whether Contentful's Delivery or Preview API is accessed.
         */
        'preview' => (bool) env('CONTENTFUL_DELIVERY_USE_PREVIEW', false),

        /*
         * The default locale to use when querying the API.
         */
        'defaultLocale' => env('CONTENTFUL_DELIVERY_DEFAULT_LOCALE', 'en-US'),

        /*
        * An array of further client options. See Contentful\Delivery\Client::__construct() for more.
        */
        'delivery.options' => [],
    ],
];
