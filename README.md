PHP client for DIDWW API v3.

About DIDWW API v3
-----

The DIDWW API provides a simple yet powerful interface that allows you to fully integrate your own applications with DIDWW services. An extensive set of actions may be performed using this API, such as ordering and configuring phone numbers, setting capacity, creating SIP trunks and retrieving CDRs and other operational data. As such, this interface is the ideal tool for building alternative dashboards, developing mobile applications and automating front and back-end applications.

The DIDWW API v3 is a fully compliant implementation of the [JSON API specification](http://jsonapi.org/format/).

Read more https://doc.didww.com/api

## Installation

Execute command

```sh
composer require didww/didww-api-3-php-sdk
```

## Usage

```php

$credentials = new \Didww\Credentials('PLACEYOURAPIKEYHERE', 'sandbox');

\Didww\Configuration::configure($credentials);

$didGroup = \Didww\Item\DidGroup::all(['include'=>'stock_keeping_units', 'filter' => ['area_name' => 'Acapulco']])->getData()[0];
var_dump($didGroup->getAttributes());
```

For details on obtaining your API key please visit https://doc.didww.com/api#introduction-api-keys

## Contributing

Bug reports and pull requests are welcome on GitHub at https://github.com/didww/didww-api-3-php-sdk

## License

The package is available as open source under the terms of the [MIT License](https://opensource.org/licenses/MIT).
