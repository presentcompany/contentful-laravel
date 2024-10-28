<?php

/**
 * This file is part of the contentful/laravel package.
 *
 * @copyright 2015-2024 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Presentcompany\Tests\ContentfulLaravel\Unit;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Orchestra\Testbench\Concerns\CreatesApplication;

class CDAConfigTest extends BaseTestCase
{
    use CreatesApplication;

    public function testGetConfig()
    {
        $this->assertSame('test_space', config('contentful-cda.delivery.space'));
    }

    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('contentful-cda.delivery.space', 'test_space');
    }
}
