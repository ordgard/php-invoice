<?php

namespace Ordgard\PhpInvoice\Tests;

use PHPUnit\Framework\TestCase as FrameworkTestCase;

/**
 * Class TestCase
 * @author sheeenazien8
 */
class TestCaseTest extends FrameworkTestCase
{
    /** @test */
    public function it_can_response_true(): void
    {
        $this->assertTrue(true);
    }

}
