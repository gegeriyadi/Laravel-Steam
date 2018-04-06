# Laravel Steam

Laravel Markdown was created by, and is maintained by [gegeriyadi](https://github.com/gegeriyadi) and is a wrapper for Laravel 5.

## Installation

```
$ composer require gegeriyadi/steam
```

## Configuration

after you install this package with composer, you should publish config file with artisan

```
php artisan vendor:publish --tag:config
```

and set steam api at .env file STEAM_APIKEY=yourapikey

## Usage

Here you can see an example of just how simple this package is to use.

```php
use Gegeriyadi\Steam\Facades\Steam;

Steam::getUserData('yoursteamid');

```

## License

coming soon
