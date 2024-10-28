<?php

/**
 * This file is part of the contentful/laravel package.
 *
 * @copyright 2015-2024 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Presentcompany\Tests\ContentfulLaravel;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Presentcompany\ContentfulLaravel\CDAServiceProvider;
use Presentcompany\ContentfulLaravel\Facades\ContentfulCDA;

class CDATestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app): array
    {
        return [CDAServiceProvider::class];
    }

    protected function getPackageAliases($app): array
    {
        return [
            'ContentfulCDA' => ContentfulCDA::class,
        ];
    }
}
