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
use Presentcompany\ContentfulLaravel\CMAServiceProvider;
use Presentcompany\ContentfulLaravel\Facades\ContentfulCMA;

class CMATestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app): array
    {
        return [CMAServiceProvider::class];
    }

    protected function getPackageAliases($app): array
    {
        return [
            'ContentfulCMA' => ContentfulCMA::class,
        ];
    }
}
