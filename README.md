# Example Symfony Package

[![CI](https://github.com/RumenDamyanov/sandbox-symfony-package/actions/workflows/ci.yml/badge.svg?branch=master)](https://github.com/RumenDamyanov/sandbox-symfony-package/actions/workflows/ci.yml)
[![codecov](https://codecov.io/gh/RumenDamyanov/sandbox-symfony-package/branch/master/graph/badge.svg)](https://codecov.io/gh/RumenDamyanov/sandbox-symfony-package)
[![PHPStan](https://github.com/RumenDamyanov/sandbox-symfony-package/actions/workflows/phpstan.yml/badge.svg?branch=master)](https://github.com/RumenDamyanov/sandbox-symfony-package/actions/workflows/phpstan.yml)

A modern, fully-tested, and CI-ready Symfony package example for PHP 8.4+ and Symfony 7+. This repository demonstrates best practices for package structure, testing, static analysis, and continuous integration.

---

## Features

- **Modern PHP 8.4+ and Symfony 7+ support**
- **100% test coverage** with [Pest](https://pestphp.com/)
- **Static analysis** with [PHPStan](https://phpstan.org/)
- **CI/CD** with GitHub Actions and [Codecov](https://codecov.io/)
- **MIT License**
- Example service with simple and advanced methods
- Comprehensive, commented test suite

---

## Installation

```bash
composer require example/symfony-package
```

---

## Usage Example

```php
use Example\SymfonyPackage\ExampleService;

$service = new ExampleService();
echo $service->greet('Rumen'); // Hello, Rumen!
```

---

## Local Development

### Run Tests

```bash
composer test
```

### Run Code Coverage (HTML report in `coverage/`)

```bash
composer coverage
```

### Run Static Analysis

```bash
composer analyze
```

---

## Contributing

Contributions, issues, and feature requests are welcome! Feel free to open an issue or submit a pull request.

---

## License

This project is licensed under the MIT License. See [LICENSE.md](LICENSE.md) for details.
