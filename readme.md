ScubaClick Keenio
=================

Service provider and facade for Laraval to integrate the [Keen.io](https://keen.io) API

Stable Version
--------------
v1.0.1

Installation
------------

Install by adding the following to the require block in composer.json:
```
"scubaclick/keenio": "1.0.*"
```

Then run `composer update`.

Then add the following in app/config/app.php to the service providers array:
```php
'ScubaClick\Keenio\KeenioServiceProvider',
```

And add to the aliases array the following:
```php
'Keenio' => 'ScubaClick\Keenio\KeenioFacade',
```

To change the configuration values, run the following command in the console:
```php
php artisan config:publish scubaclick/keenio
```
It is recommended to stick your API keys into environmental variables and reference those in the config file.

Documentation
-------------
Read the docs of the underlying library:
 * [Docs](https://keen.io/docs)
 * [GitHub](https://github.com/keenlabs/KeenClient-PHP)
 * [API Reference](https://keen.io/docs/api/reference)

License
-------

ScubaClick Keenio is licenced under the MIT license.
