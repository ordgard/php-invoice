<?php

namespace Ordgard\PhpInvoice\Tests;

use Ordgard\PhpInvoice\Builders\PhpInvoiceBuilder;
use PHPUnit\Framework\TestCase as FrameworkTestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class TestCase
 * @author sheeenazien8
 */
abstract class TestCase extends FrameworkTestCase
{
    public function reflection(PhpInvoiceBuilder $phpInvoice): ReflectionProperty
    {
        $reflectionClass = new ReflectionClass($phpInvoice);
        $phpInvoiceProperty = $reflectionClass->getProperty('phpInvoice');
        $phpInvoiceProperty->setAccessible(true);

        return $phpInvoiceProperty;
    }

    public function expected_return()
    {
        return [
            'info' => [
                'from' => [],
                'to' => []
            ],
            'table' => [
                [
                    'content' => [
                        'header' => [
                            'item' => [
                                'no', 'description', 'qty', 'price',
                                [
                                    'text' => 'subtotal',
                                    'style' => ['align' => 'center', 'text-decoration' => 'italic']
                                ],
                            ],
                            'style' => ['bg-color' => 'blue', 'size' => '12px']
                        ],
                        'items' => [
                            [
                                'item' => [1, 'Ini Description', 10, 12000,
                                [
                                    'text' => 120000,
                                    'style' => ['align' => 'center', 'text-decoration' => 'italic']
                                ]
                                ],
                                'style' => [
                                    [
                                        'bg-color' => 'blue',
                                        'size' => '12px'
                                    ],
                                    [
                                        'bg-color' => 'blue',
                                        'size' => '12px'
                                    ],
                                ]
                            ],
                            [
                                'item' => [2, 'Ini Description 2', 15, 10000,
                                [
                                    'text' => 150000,
                                    'style' => ['align' => 'center', 'text-decoration' => 'italic']
                                ]
                                ],
                                'style' => [
                                    [
                                        'bg-color' => 'blue',
                                        'size' => '12px'
                                    ],
                                    [
                                        'bg-color' => 'blue',
                                        'size' => '12px'
                                    ],
                                ]
                            ],
                        ],
                        'footer' => [
                            'items' => ['', '', ['text' => 'Total: ', 'style' => ['bg-color' => 'blue']], '', ['text' => 28000, 'style' => ['text-decoration' => 'bold']]],
                            'style' => [
                                'bg-color' => 'black'
                            ]
                        ]
                    ]
                ],
                [
                    'content' => [
                        'header' => [],
                        'items' => [],
                        'footer' => [],
                    ]
                ]
            ],
        ];
    }
}
