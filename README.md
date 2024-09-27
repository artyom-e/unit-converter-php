# PHP Unit Converter Package

Unit Converter is a flexible and extensible PHP package that allows you to convert between different units of measurement. 

## Requirements

- PHP 8.2 or higher

## Installation

```bash
composer require artyom-e/unit-converter
```

## Usage

```php
use ArtyomE\UnitConverter\Converters\Temperature\CelsiusConverter;

$converter = new CelsiusConverter(10);
$converter->toFahrenheit(); //50.0
$converter->toKelvin(); //283.15
```

## Available Converters

- Distance 
  - Kilometers to Miles
  - Miles to Kilometers
  - Meters to Feet
  - Feet to Meters
- Temperature:
  - Celsius to Fahrenheit
  - Celsius to Kelvin
  - Fahrenheit to Celsius
  - Fahrenheit to Kelvin
  - Kelvin to Fahrenheit 
  - Kelvin to Celsius 
- Weight:
  - Kilograms to Pounds
  - Pounds to Kilograms
