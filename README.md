# php-invoice-template
Makes it easier for you to generate invoices 

## Introduction
This package allows yo to use invoice template easily

Once installed you can do stuff like this:
```php
$from = ['Company name', 'Address', 'Phone', 'whatever you want'];
$to = ['Client name', 'Address', 'Phone', 'whatever you want'];
// css attribute
$globalStyle = [
  'bg-color' => 'yellow',
  'size' => '12px'
];
$invoice = new Invoice($from, $to);
$invoice->setItem([
  'no' => [1,2],
  'description' => [ 'item1', 'item 2'],
  'qty' => [2, 3],
  'price' => ['style' => 'bold', 'items' => ['$2000', '$4000']],
  'subtotal' => ['style' => 'bold', 'items' => ['$2000', '$4000']],
  'row_style' => [ 
    ['bg-color' => 'blue'],
    ['size' => '12px'],
  ],
], $globalStyle);
$invoice->setFooter([], $footerStyle);

// the other table for description maybe
$invoice->setItem([], $globalStyle);

// this command will give you the html output
echo $invoice->render();
```

## Support us
We invest a lot of resources into creating this thing. You can support us by pressing the star button in the top right corner, or buy us a cup of coffee to brew together.

## Installing
`composer require ordgard/php-invoice-template`

## Basic usage

## Advanced usage

## Credits
* [Sheena Zien](https://github.com/sheenazien8)
* [All Contributor](https://github.com/https://github.com/ordgard/php-invoice-template/blob/master/contributor.md)

## License
The MIT License (MIT). Please see [License File](https://github.com/ordgard/php-invoice-template/blob/master/LICENSE.md) for more information.
