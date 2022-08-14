# `quick-command`

This is a collection of quick commands for your Laravel project. It includes commands for actions, enums, helper, traits, etc.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/denizozturk/quick-command.svg?style=flat-square)](https://packagist.org/packages/denizozturk/quick-command)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/denizozturk/quick-command/run-tests?label=tests)](https://github.com/denizozturk/quick-command/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/denizozturk/quick-command.svg?style=flat-square)](https://packagist.org/packages/denizozturk/quick-command)

## Installation

You can install the package via composer:

```bash
composer require denizozturk/quick-command
```

## Usage

```php
php artisan quick:make CollectionName --type=action
```

> **Note**
> You can use `php artisan quick:make` command with `--type=action` or `--type=contract` or `--type=enum` or `--type=helper` or `--type=trait`

> **Warning**
> If you created a global helper, you should update your `compose.json` file. As you can see in the example below:

```json
{
  "autoload": {
    "files": [
      "app/Helpers/helpers.php"
    ]
  }
}
```

## Testing

```bash
composer test
```

## TODO

- [ ] Add support to more types
- [ ] Add support for useful patterns
- [ ] Add support arguments for commands

## Contributing

Please see [CONTRIBUTING](https://github.com/denizozturk/.github/blob/main/CONTRIBUTING.md) for details.

## Credits

- [Deniz ÖZTÜRK](https://github.com/denizozturk)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
