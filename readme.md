# TranslatableBootForms

TranslatableBootForms is a Laravel 4 package built on top of adamwathan/bootforms and dimsav/laravel-translatable, it enable form model binding on translated fields.

## Installing with Composer

You can install this package via Composer by including the following in your `composer.json`:

```json
{
    "require": {
        "typicms/translatablebootforms": "~1.0.0"
    }
}
```

### Laravel 4

If you are using Laravel 4, you can get started very quickly by registering the included service provider.

Modify the ‘providers’ array in `app/config/app.php` to include the `BootFormsServiceProvider`:

```php
'providers' => array(
		//…
		'TypiCMS\TranslatableBootForms\TranslatableBootFormsServiceProvider'
	),
```

Run ```composer update```

Add the **BootForm** and **Translatable** facades to the **aliases** array in **app/config/app.php**:

```php
'aliases' => array(
		//…
    'BootForm' => 'AdamWathan\BootForms\Facades\BootForm'
		'Translatable' => 'Dimsav\Translatable\Translatable',
	),
```

You can now start using BootForms by calling methods directly on the `BootForm` facade:

```php
BootForm::text('title', 'en[title]') }}
```

### Docs

Docs on BootForm can be found here : https://github.com/adamwathan/bootforms  
Docs on Laravel-Translatable can be found here : https://github.com/dimsav/laravel-translatable
