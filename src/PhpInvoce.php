<?php

namespace Ordgard\PhpInvoice;

use Ordgard\PhpInvoice\Interfaces\ItemResolver;
use Ordgard\PhpInvoice\Interfaces\StyleResolver;

/** @package Ordgard\PhpInvoice */
class PhpInvoce
{
    /** @var array */
    private $parts = [];
    /** @var array */
    private $part = [];
    /** @var int */
    private $index;

    /**
     * @param array $from
     * @param array $to
     */
    public function __construct(array $from, array $to)
    {
        $this->parts['info'] = $this->info($from, $to);
    }

    /**
     * @param string $part_name
     * @param array $data
     * @return void
     */
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

    /** @return array  */
    public function getParts(): array
    {
        return $this->parts;
    }

    /**
     * @param array $data
     * @return array
     */
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

    /**
     * @param array $data
     * @return array
     */
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

    /**
     * @param array $data
     * @return array
     */
    private function mapHeader(array $data): array
    {
        return [];
    }

    /**
     * @param array $from
     * @param array $to
     * @return array
     */
    private function info(array $from, array $to): array
    {
        return [
            'from' => $from,
            'to' => $to
        ];
    }

    /**
     * @param mixed $index
     * @return void
     */
    public function attemptIndex($index): void
    {
        $this->index = $index;
    }

    /** @return void  */
    public function clearParts(): void
    {
        $this->part = [];
    }

}
