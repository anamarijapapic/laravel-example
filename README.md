# This is an example Laravel package.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/anamarijapapic/laravel-example.svg?style=flat-square)](https://packagist.org/packages/anamarijapapic/laravel-example)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/anamarijapapic/laravel-example/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/anamarijapapic/laravel-example/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/anamarijapapic/laravel-example/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/anamarijapapic/laravel-example/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/anamarijapapic/laravel-example.svg?style=flat-square)](https://packagist.org/packages/anamarijapapic/laravel-example)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require anamarijapapic/laravel-example
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-example-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-example-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-example-views"
```

## Usage

```php
$example = new AnamarijaPapic\Example();
echo $example->echoPhrase('Hello, AnamarijaPapic!');
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
