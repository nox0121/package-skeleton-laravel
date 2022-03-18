# :package_description

[![Latest Version on Packagist](https://img.shields.io/packagist/v/:vendor_name/:package_name.svg?style=flat-square)](https://packagist.org/packages/:vendor_name/:package_name)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/:vendor_name/:package_name/run-tests?label=tests)](https://github.com/:vendor_name/:package_name/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/:vendor_name/:package_name.svg?style=flat-square)](https://packagist.org/packages/:vendor_name/:package_name)

**Note:** Run `./configure-skeleton` to get started, or manually replace  ```:author_name``` ```:author_username``` ```:author_email``` ```:vendor_name``` ```:package_name``` ```:package_description``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](.github/CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line. You can also run `configure-skeleton.sh` to do this automatically.

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require :vendor_name/:package_name
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Nox0121\Skeleton\SkeletonServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Nox0121\Skeleton\SkeletonServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$skeleton = new Nox0121\Skeleton();
echo $skeleton->echoPhrase('Hello, Nox0121!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
