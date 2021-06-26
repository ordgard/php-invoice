<?php

namespace Ordgard\PhpInvoice\Factories;

use Ordgard\PhpInvoice\Builders\PhpInvoiceBuilder;
use Ordgard\PhpInvoice\Interfaces\PhpInvoiceInterface;

/** @package Ordgard\PhpInvoice\Factories */
class PhpInvoiceFactory
{
    /**
     * @param array $from
     * @param array $to
     * @return PhpInvoce
     */
    public static function make($from, $to): PhpInvoiceInterface
    {
        return new PhpInvoiceBuilder($from, $to);
    }
}
