# This is an example Laravel package.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/anamarijapapic/laravel-example.svg?style=flat-square)](https://packagist.org/packages/anamarijapapic/laravel-example)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/anamarijapapic/laravel-example/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/anamarijapapic/laravel-example/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/anamarijapapic/laravel-example/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/anamarijapapic/laravel-example/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/anamarijapapic/laravel-example.svg?style=flat-square)](https://packagist.org/packages/anamarijapapic/laravel-example)

My first Laravel package. This is an example Laravel package.  
*([Spatie Laravel Package Training v2.0](https://laravelpackage.training/) - Creating a Laravel package)*

## Installation

You can install the package via composer:

```bash
composer require anamarijapapic/laravel-example
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="example-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="example-config"
```

This is the contents of the published config file:

```php
return [
    /**
     * This value will be shown when the example command is executed.
     */
    'command_output' => 'Output configured in config file',

    'another_option' => 'Another value',
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="example-views"
```

## Usage

```php
$example = new AnamarijaPapic\Example();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Anamarija Papić](https://github.com/anamarijapapic)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
