# laravel-handle-blade-directives
A few useful Laravel Blade directives.

## Installation

You can install the package via composer:

```bash
composer require handlesocial/laravel-handle-blade-directives
```

## Usage

### @canany
extends @can by enabling multiple pipe-delimited arguments to check.

```blade
@canany('this|that')
   This will be echoed if either/or is true
@endcanany
```


## Contributing

Contributions welcome, [thanks](https://github.com/handlesocial/laravel-handle-blade-directives/graphs/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
