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
        return [
            'header' => [
                'item' => ['no', 'description', 'qty', 'price',
                    [
                        'text' => 'subtotal',
                        'style' => ['align' => 'center', 'text-decoration' => 'italic']
                    ]
                ],
                'style' => ['bg-color' => 'blue', 'size' => '12px']
            ],
            'content' => [
                [
                    'items' => [
                        [
                            'item' => [1, 'Ini Description', 10, 12000,
                                [
                                    'text' => 120000,
                                    'style' => ['align' => 'center', 'text-decoration' => 'italic']
                                ]
                            ],
                            'style' => ['bg-color' => 'blue', 'size' => '12px']
                        ],
                        [
                            'item' => [2, 'Ini Description 2', 15, 10000,
                                [
                                    'text' => 150000,
                                    'style' => ['align' => 'center', 'text-decoration' => 'italic']
                                ]
                            ],
                            'style' => ['bg-color' => 'blue', 'size' => '12px']
                        ],
                    ]
                ],
            ],
            'footer' => []
        ];
    }
}
