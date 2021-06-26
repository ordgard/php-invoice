<?php

namespace Ordgard\PhpInvoice\Builders;

use Ordgard\PhpInvoice\Interfaces\PhpInvoiceInterface;
use Ordgard\PhpInvoice\PhpInvoce;
use Ordgard\PhpInvoice\Resolvers\ItemResolver;
use Ordgard\PhpInvoice\Resolvers\StyleResolver;

/** @package Ordgard\PhpInvoice\Builders */
class PhpInvoiceBuilder implements PhpInvoiceInterface
{
    /**
     * @var PhpInvoce
     */
    private $phpInvoice;

    private $index = 0;

    /**
     * @param array $from
     * @param array $to
     */
    public function __construct(array $from, array $to)
    {
        $this->phpInvoice = new PhpInvoce($from, $to);
    }

    /**
     * @param string $name_theme
     * @return PhpInvoiceInterface
     */
    public function setTheme($name_theme): PhpInvoiceInterface
    {
        return $this;
    }

    /**
     * @param array $items
     * @param array $style
     * @return PhpInvoiceInterface
     */
    public function setItem(array $items, array $style = []): PhpInvoiceInterface
    {
        $this->phpInvoice->attemptIndex($this->index);
        $this->index += 1;
        $this->phpInvoice->addParts('items', [new ItemResolver($items), new StyleResolver($style)]);

        return $this;
    }

    /**
     * @param array $items
     * @param array $style
     * @return PhpInvoiceInterface
     */
    public function setFooter(array $items, array $style = []): PhpInvoiceInterface
    {
        $this->phpInvoice->addParts('footer', [new ItemResolver($items), new StyleResolver($style)]);
        $this->phpInvoice->clearParts();

        return $this;
    }

    /** @return string  */
    public function render(): string
    {
        return 'render';
    }
}
