<?php

namespace Ordgard\PhpInvoice\Tests;

use Ordgard\PhpInvoice\PhpInvoce;
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
        $phpInvoice = new PhpInvoce(['siap'], ['Oke']);

        $this->assertTrue($phpInvoice->render() == 'render');
    }
}
