<?php

/**
 * This file is part of the contentful/laravel package.
 *
 * @copyright 2015-2024 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Presentcompany\Tests\ContentfulLaravel\Unit;

use Contentful\Management\Client;
use Presentcompany\ContentfulLaravel\Facades\ContentfulCMA;
use Presentcompany\Tests\ContentfulLaravel\CMATestCase;

class CMAClientTest extends CMATestCase
{
    public function testGetSpace()
    {
        $this->assertInstanceOf(Client::class, ContentfulCMA::getFacadeRoot());
    }
}
