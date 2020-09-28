<?php

namespace Shiveh\LogUsage\Tests;

use Orchestra\Testbench\TestCase;
use Shiveh\LogUsage\LogUsageServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LogUsageServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
