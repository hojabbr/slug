# Persian (Farsi) Slug generator for Laravel 5.X

[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

# Quick Installation
Begin by installing the package through Composer.

```
composer require hosseinhkj/slug:dev
```

Once this operation is complete, simply add both the service provider and facade classes to your project's `config/app.php` file:

#### Service Provider

```php
Hosseinhkj\Slug\SlugServiceProvider::class,
```

#### Facade

```php
'Slug' => Hosseinhkj\Slug\Facades\Slug::class,
```

And that's it! With your coffee in reach, start building out some awesome slugs!