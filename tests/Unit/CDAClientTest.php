<?php

/**
 * This file is part of the contentful/laravel package.
 *
 * @copyright 2015-2024 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Presentcompany\Tests\ContentfulLaravel\Unit;

use Contentful\Delivery\Client;
use Presentcompany\Tests\ContentfulLaravel\CDATestCase;
use Presentcompany\ContentfulLaravel\Facades\ContentfulCDA;

class CDAClientTest extends CDATestCase
{
    public function testGetSpace()
    {
        $this->assertInstanceOf(Client::class, ContentfulCDA::getFacadeRoot());
    }
}
