### This package has been replaced with this package: https://github.com/hojabbr/PersianSlug

# Persian (Farsi) Slug generator for Laravel 5

[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

# Quick Installation
Begin by installing the package through Composer.

```
composer require hosseinhkj/slug
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
#### Example
```php
use Slug;
$slug = Slug::slugify("سلام خوبی؟ این یک تست است"); // سلام-خوبی-این-یک-تست-است
```

And that's it! With your coffee in reach, start building out some awesome slugs!
