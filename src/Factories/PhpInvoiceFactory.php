<?php

namespace Ordgard\PhpInvoice\Factories;

use Ordgard\PhpInvoice\PhpInvoce;

/** @package Ordgard\PhpInvoice\Factories */
class PhpInvoiceFactory
{
    /**
     * @param array $from
     * @param array $to
     * @return PhpInvoce
     */
    public static function make($from, $to)
    {
        return new PhpInvoce($from, $to);
    }
}
