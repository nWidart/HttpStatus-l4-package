# HttpStatus
===

HttpStatus is a small package that adds pretty error pages.

It listens at `App::error()` and `App::down()` to provide error pages.
Note that these error pages will only show when `debug` is set to `true`.



## Installation

Add `nwidart/httpstatus` as a requirement to `composer.json`:

```
{
    ...
    "require": {
        ...
        "nwidart/httpstatus": "dev-master"
    },
}
```

Update composer:

```
$ php composer.phar update
```


(Optional) Publish package config:

```
$ php artisan config:publish nwidart/httpstatus
```

## Configuration

After the configuration file has been published you can return your own error views. You can provide a view for each error:

```
return array(
    'views' => array(
        '403' => 'errors.your403',
        '404' => 'errors.your404',
        '500' => 'errors.your500',
        '503' => 'errors.your503',
    )
);

```

## Credits

It's inspired by [Traffic-Signs](https://github.com/rtablada/traffic-signs)

