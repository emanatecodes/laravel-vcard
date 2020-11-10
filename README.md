#  Laravel vCard

[![Latest Version on Packagist](https://img.shields.io/packagist/v/emanate/laravel-vcard.svg?style=flat-square)](https://packagist.org/packages/emanate/laravel-vcard)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/emanate/laravel-vcard/run-tests?label=tests)](https://github.com/emanate/laravel-vcard/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/emanate/laravel-vcard.svg?style=flat-square)](https://packagist.org/packages/emanate/laravel-vcard)


Supercharged vCard in Laravel


## Installation

You can install the package via composer:

```bash
composer require emanate/laravel-vcard
```

## Usage

``` php
$vcard = VCard();

// define variables
$lastname = 'Desloovere';
$firstname = 'Jeroen';

// add personal data
$vcard->addName($lastname, $firstname);

// return vcard as a string
return $vcard->getOutput();

```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alpha Olomi](https://github.com/alphaolomi)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
