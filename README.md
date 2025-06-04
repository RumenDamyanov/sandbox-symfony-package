# Example Symfony Package

[![CI](https://github.com/RumenDamyanov/sandbox-symfony-package/actions/workflows/ci.yml/badge.svg?branch=master)](https://github.com/RumenDamyanov/sandbox-symfony-package/actions/workflows/ci.yml)
[![codecov](https://codecov.io/gh/RumenDamyanov/sandbox-symfony-package/branch/master/graph/badge.svg)](https://codecov.io/gh/RumenDamyanov/sandbox-symfony-package)
[![PHPStan](https://github.com/RumenDamyanov/sandbox-symfony-package/actions/workflows/phpstan.yml/badge.svg?branch=master)](https://github.com/RumenDamyanov/sandbox-symfony-package/actions/workflows/phpstan.yml)

A modern Symfony package example with 100% test coverage, static analysis, and CI/CD.

## Features
- Modern PHP 8.4+ and Symfony 7+ support
- 100% test coverage with [Pest](https://pestphp.com/)
- Static analysis with [PHPStan](https://phpstan.org/)
- CI/CD with GitHub Actions and [Codecov](https://codecov.io/)
- MIT License

## Installation

```bash
composer require example/symfony-package
```

## Usage

```php
use Example\SymfonyPackage\ExampleService;

$service = new ExampleService();
echo $service->greet('World'); // Hello, World!
```

## Testing

```bash
composer test
```

## Static Analysis

```bash
composer analyze
```

## License

MIT
