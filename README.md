# Portugal vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Portugal vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/pt-vat-format-validator
```

## Usage example

Valid Portugal vat number:

```php
$validator = new PTVatFormatValidator();
$validator->isValid('PT123456789');
$validator->isValid('123456789');
```

Returns:

```shell
true
true
```

Invalid Portugal vat number:

```php
$validator = new PTVatFormatValidator();
$validator->isValid('PT1234567890');
$validator->isValid('PT12345678');
$validator->isValid('1234567890');
$validator->isValid('12345678');
$validator->isValid('DE123456789');
```

```shell
false
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
