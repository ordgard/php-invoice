<?php

namespace Ordgard\PhpInvoice;

use Ordgard\PhpInvoice\Interfaces\ItemResolver;
use Ordgard\PhpInvoice\Interfaces\StyleResolver;

/** @package Ordgard\PhpInvoice */
class PhpInvoce
{
    private $parts = [];
    private $part = [];
    private $index;

    /**
     * @param array $from
     * @param array $to
     */
    public function __construct(array $from, array $to)
    {
        $this->parts['info'] = $this->info($from, $to);
    }

    public function addParts(string $part_name, array $data): void
    {
        switch ($part_name) {
            case 'items':
                $this->part['content']['header'] = $this->mapHeader($data);
                $this->part['content']['items'] = $this->mapItem($data);
                break;

            case 'footer':
                $this->part['content']['footer'] = $this->mapFooter($data);
                break;
        }

        $this->parts['table'][$this->index] = $this->part;
    }

    public function getParts(): array
    {
        return $this->parts;
    }

    private function mapItem(array $data): array
    {
        foreach ($data as $row) {
            if ($row instanceof ItemResolver) {

            }
            if ($row instanceof StyleResolver) {

            }
        }

        return [];
    }

    private function mapFooter(array $data): array
    {
        foreach ($data as $row) {
            if ($row instanceof ItemResolver) {

            }
            if ($row instanceof StyleResolver) {

            }
        }

        return [];
    }

    private function mapHeader(array $data): array
    {
        return [];
    }

    private function info(array $from, array $to): array
    {
        return [
            'from' => $from,
            'to' => $to
        ];
    }

    public function attemptIndex($index): void
    {
        $this->index = $index;
    }

    public function clearParts()
    {
        $this->part = [];
    }

}
