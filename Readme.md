# Laravel Steam

Laravel Steam was created and is maintained by [gegeriyadi](https://github.com/gegeriyadi) and is a wrapper for Laravel 5-7 to communicate with Steam API.

Support Laravel 7.x

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

get your apikey at steam dev pages [here](https://steamcommunity.com/dev)

## Usage

Here you can see an example of just how simple this package is to use.

```php
use Gegeriyadi\Steam\Facades\Steam;

Steam::getUserData('yoursteamid');
```
example output
```JSON
{
    "response": {
        "players": [
            {
                "steamid": "76561198193808363",
                "communityvisibilitystate": 3,
                "profilestate": 1,
                "personaname": "GEGEPES",
                "lastlogoff": 1523033287,
                "profileurl": "http://steamcommunity.com/id/gegame/",
                "avatar": "https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/2b/2b5dac5a402b3bf7f9be122561bfafdebc416d11.jpg",
                "avatarmedium": "https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/2b/2b5dac5a402b3bf7f9be122561bfafdebc416d11_medium.jpg",
                "avatarfull": "https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/2b/2b5dac5a402b3bf7f9be122561bfafdebc416d11_full.jpg",
                "personastate": 1,
                "realname": "Teguh Riyadi",
                "primaryclanid": "103582791459909028",
                "timecreated": 1430056461,
                "personastateflags": 0,
                "loccountrycode": "ID",
                "locstatecode": "33"
            }
        ]
    }
}
```

## Legal
This software was developed for internal use. It is shared with the general public under the permissive MIT license, without any guarantee of fitness for any particular purpose. Refer to the included LICENSE file for more details.