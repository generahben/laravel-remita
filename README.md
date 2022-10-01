# Laravel Remita

> A Laravel package to conveniently integrate Remita payment gateway
 
**Installation** 
> composer require generahben/laravel-remita

**Publish Vendor**
> php artisan vendor:publish --provider="Generahben\Remita\Providers\RemitaServiceProvider"
 
**Register the Remita Facade in config/app.php**
```injectablephp
    'aliases' => Facade::defaultAliases()->merge([
        ...
        'Remita' => \Generahben\Remita\Facades\Remita::class
        ...
    ])->toArray(),
```