<?php

namespace Ordgard\PhpInvoice\Tests;

use PHPUnit\Framework\TestCase as FrameworkTestCase;

/**
 * Class TestCase
 * @author sheeenazien8
 */
class BackendResultTest extends FrameworkTestCase
{
    /** @test */
    public function it_can_response_true(): void
    {
        $this->assertTrue(true);
    }


    public function test_for_header_array(): void
    {

    }

    public function test_for_content_array(): void
    {

    }

    public function test_for_info_array(): void
    {

    }

    public function test_for_footer_array(): void
    {

    }

    public function test_for_style_per_item(): void
    {

    }

    public function test_for_style_per_row(): void
    {

    }

    public function test_for_global_style(): void
    {

    }

    public function test_for_all_restult_array(): void
    {

    }

    private function expected_return()
    {
        return [
            'info' => [
                'from' => [],
                'to' => []
            ],
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
