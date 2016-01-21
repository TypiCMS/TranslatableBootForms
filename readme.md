# TranslatableBootForms

Instead of this package, next version of TypiCMS will probably use [Laravel-Translatable-Bootforms](https://github.com/Propaganistas/Laravel-Translatable-Bootforms)

TranslatableBootForms is a Laravel package built on top of [BootForms](https://github.com/adamwathan/bootforms) and [Laravel Translatable](https://github.com/dimsav/laravel-translatable), it enables form model binding on translated fields.

## Installing with Composer

You can install this package via Composer with this command:

```
composer require typicms/translatablebootforms
```

## Installation in Laravel

Modify the `providers` array in `config/app.php` to include the service provider:

```php
'providers' => [
    //…
    TypiCMS\TranslatableBootForms\TranslatableBootFormsServiceProvider::class,
],
```

Run ```composer update```

Add the `BootForm` and `Translatable` facades to the `aliases` array in `config/app.php:

```php
'aliases' => [
    //…
    'BootForm' => AdamWathan\BootForms\Facades\BootForm::class,
    'Translatable' => Dimsav\Translatable\Translatable::class,
],
```

You can now start using BootForms by calling methods directly on the `BootForm` facade:

```php
BootForm::text('title', 'en[title]')
```

## Documentation

**BootForms**  
https://github.com/adamwathan/bootforms  
**Laravel-Translatable**  
https://github.com/dimsav/laravel-translatable
