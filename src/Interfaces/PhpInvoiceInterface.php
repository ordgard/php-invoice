<?php

namespace Ordgard\PhpInvoice\Interfaces;

/**
 * Interface PhpInvoiceInterface
 * @author sheeenazien8
 */
interface PhpInvoiceInterface
{
    /**
     * @param array $data
     * @param array $style
     * @return PhpInvoiceInterface
     */
    public function setItem(array $data, array $style = []): PhpInvoiceInterface;

    /**
     * @param string $data
     * @return PhpInvoiceInterface
     */
    public function setTheme(string $data): PhpInvoiceInterface;

    /**
     * @param array $data
     * @param array $style
     * @return PhpInvoiceInterface
     */
    public function setFooter(array $data, array $style = []): PhpInvoiceInterface;

    /** @return string  */
    public function render(): string;
}
