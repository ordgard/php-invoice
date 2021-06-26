<?php

namespace Ordgard\PhpInvoice\Tests;

use Ordgard\PhpInvoice\Factories\PhpInvoiceFactory;
use Ordgard\PhpInvoice\PhpInvoce;

/**
 * Class TestCase
 * @author sheeenazien8
 */
class BackendResultTest extends TestCase
{
    /** @test */
    public function it_can_response_true(): void
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function it_test_for_header_array(): void
    {
        list($from, $to) = $this->info();

        $phpInvoice = PhpInvoiceFactory::make($from, $to);
        $phpInvoice->setItem([
            'no' => [1, 2],
            'description' => ['Ini Description', 'Ini Description 2'],
        ]);

        $expected_header = [
            'header' => [
                'item' => ['No', 'Description'],
            ],
        ];

        $phpInvoiceProperty = $this->reflection($phpInvoice);

        /** @var PhpInvoce $phpInvoiceObj */
        $phpInvoiceObj = $phpInvoiceProperty->getValue($phpInvoice);
        $parts = $phpInvoiceObj->getParts();
        $this->assertSame($expected_header, [
            'header' => $parts['table'][0]['content']['header']
        ]);
    }

    /** @test */
    public function it_test_for_content_array(): void
    {
        list($from, $to) = $this->info();

        $phpInvoice = PhpInvoiceFactory::make($from, $to);
        $phpInvoice->setItem([
            'no' => [1, 2, 3],
            'description' => ['Ini Description', 'Ini Description 2', 'Ini Description 3'],
            'row_style' => [
                ['bg-color' => 'blue', 'size' => '12px'],
                ['bg-color' => 'orange', 'size' => '12px'],
                ['bg-color' => 'blue', 'size' => '12px'],
            ]
        ]);

        $expected_content_items = [
            'items' => [
                [
                    'item' => [1, 'Ini Description'],
                    'style' => ['bg-color' => 'blue', 'size' => '12px']
                ],
                [
                    'item' => [2, 'Ini Description 2'],
                    'style' => ['bg-color' => 'orange', 'size' => '12px']
                ],
                [
                    'item' => [3, 'Ini Description 3'],
                    'style' => ['bg-color' => 'blue', 'size' => '12px']
                ],
            ]
        ];

        $phpInvoiceProperty = $this->reflection($phpInvoice);

        /** @var PhpInvoce $phpInvoiceObj */
        $phpInvoiceObj = $phpInvoiceProperty->getValue($phpInvoice);
        $parts = $phpInvoiceObj->getParts();
        $this->assertSame($expected_content_items, [
            'items' => $parts['table'][0]['content']['items']
        ]);
    }

    /** @test */
    public function it_test_for_simple_info(): void
    {
        $from = ['Company Name', 'Company Address', 'Company Telp'];
        $to = ['Client Name', 'Client Address', 'Client Telp'];


        $expected_content_info = [
            'info' => [
                'from' => $from,
                'to' => $to,
            ],
        ];

        $phpInvoice = PhpInvoiceFactory::make($from, $to);
        $phpInvoiceProperty = $this->reflection($phpInvoice);

        /** @var PhpInvoce $phpInvoiceObj */
        $phpInvoiceObj = $phpInvoiceProperty->getValue($phpInvoice);
        $parts = $phpInvoiceObj->getParts();
        $this->assertSame($expected_content_info, [
            'info' => $parts['info']
        ]);
    }

    /** @test */
    public function it_test_for_info_with_key(): void
    {
        list($from, $to) = $this->info();

        $expected_content_info = [
            'info' => [
                'from' => $from,
                'to' => $to,
            ],
        ];

        $phpInvoice = PhpInvoiceFactory::make($from, $to);
        $phpInvoiceProperty = $this->reflection($phpInvoice);
        $phpInvoiceObj = $phpInvoiceProperty->getValue($phpInvoice);
        $parts = $phpInvoiceObj->getParts();
        $this->assertSame($expected_content_info, [
            'info' => $parts['info']
        ]);
    }

    public function it_test_for_footer_array(): void
    {

    }

    public function it_test_for_style_per_item(): void
    {

    }

    public function it_test_for_style_per_row(): void
    {

    }

    public function it_test_for_global_style(): void
    {

    }

    public function it_test_for_all_restult_array(): void
    {

    }

    private function info(): array
    {
        $from = [
            'company_name' => [
                'text' => 'Company Name',
                'style' => [
                    'bg-color' => 'blue'
                ],
            ],
            'company_address' => [
                'text' => 'Kalinyamatan',
                'style' => [
                    'bg-color' => 'blue'
                ],
            ],
        ];
        $to = [
            'client_name' => [
                'text' => 'Client Name',
                'style' => [
                    'bg-color' => 'blue'
                ],
            ],
            'client_address' => [
                'text' => 'Pecangaan',
                'style' => [
                    'bg-color' => 'blue'
                ],
            ],
        ];

        return [$from, $to];
    }
}
