<?php

namespace Ordgard\PhpInvoice;

/** @package Ordgard\PhpInvoice */
class PhpInvoce
{
    private $tables = [];

    private $headers = [];

    private $theme;

    /**
     * @param array $from
     * @param array $to
     */
    public function __construct($from, $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    /**
     * @param string $theme
     * @return PhpInvoce
     */
    public function setTheme($theme): self
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * @param array $header
     * @param array $style
     * @return PhpInvoce
     */
    public function setHeader($header, $style = []): self
    {
        $this->headers = $header;

        return $this;
    }

    /**
     * Setter for items
     *
     * @param array $item
     * @param array $style
     * @return PhpInvoce
     */
    public function setItem($items, $style = []): self
    {
        $this->tables = $items;

        return $this;
    }

    /**
     * Setter for Footer
     *
     * @param array $footers
     * @param array $style
     * @return PhpInvoce
     */
    public function setFooter($footers, $style = []): self
    {
        $this->Footer = $footers;

        return $this;
    }

    /**
     * render configuration to invoice template
     *
     * @return string|html
     */
    public function render()
    {
        return 'render';
    }
}
