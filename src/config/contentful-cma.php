<?php

/**
 * This file is part of the presentcompany/contentfullaravel package.
 *
 * @copyright 2024 Will Walsh - Present Company
 * @license   MIT
 */

declare(strict_types=1);

return [
    'management' => [
        /*
         * An API key for the above specified space.
         */
        'token' => env('CONTENTFUL_MANAGEMENT_TOKEN'),

        /*
         * The ID of the environment you want to access.
         */
        'environment' => env('CONTENTFUL_MANAGEMENT_ENVIRONMENT_ID', 'master'),

        /*
         * The ID of the space you want to access.
         */
        'space' => env('CONTENTFUL_MANAGEMENT_SPACE_ID'),

        /*
         * The default locale to use when querying the API.
         */
        'defaultLocale' => env('CONTENTFUL_MANAGEMENT_DEFAULT_LOCALE'),

        /*
        * An array of further client options. See Contentful\Delivery\Client::__construct() for more.
        */
        'delivery.options' => [],
    ],
];
