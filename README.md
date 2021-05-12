# HTTP Methods

PHP library containing all HTTP methods listed in
the [IANA registry](https://www.iana.org/assignments/http-methods/http-methods.xhtml).

## Installation

```
composer require mrcl/http-methods
```

## Usage

The `HttpMethod` interface contains all HTTP methods as constants

```php
use Mrcl\Utils\InternetStandards\HttpMethod;

HttpMethod::GET  // 'GET'       
HttpMethod::POST // 'POST'
```