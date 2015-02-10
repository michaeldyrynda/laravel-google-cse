# laravel-google-cse

Laravel 4.x wrapper for the [Google Custom Search Engine API](https://developers.google.com/custom-search/). This may work for Laravel 5, but *has not been tested*.

**Note**: You will need an API key and search engine configured in your Google Custom Search control panel.

```
composer require iatstuti/google-cse
```

Once installed, add the Service Provider into `app/config/app.php`

```php
'providers' => array(
    // ...
    'Iatstuti\GoogleCse\GoogleCseServiceProvider',
    // ...
),
```

If you wish to use an alias, set the following (also in `app/config/app.php`)

```php
'aliases' => array(
    // ...
    'Iatstuti\GoogleCse\Facades\LaravelFacade',
    // ...
),
```

Lastly, publish the package configuration and update the configuration in `app/config/packages/iatstuti/google-cse/cse.php`.

```
php artisan config:publish iatstuti/google-cse
```

To use the package, you can make a call to `GoogleCse::search($term)`.

Calls to this this method will return an array of items from the JSON structure outlined [here](https://developers.google.com/custom-search/json-api/v1/reference/cse/list).
