<?php

declare(strict_types=1);

namespace Generahben\Remita\Providers;


use Generahben\Remita\Remita;
use Illuminate\Support\ServiceProvider;

/**
 * Class RemitaServiceProvider
 *
 * This file is part of Laravel Remita Package
 *
 * @author (c) Generah Ben <generahben@gmail.com>
 * @since 9/18/2022
 *
 * For the full copyright and license information, please view the LICENSE
 * file distributed with this source code.
 */
class RemitaServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../../config/remita.php' => config_path('remita.php'),
        ]);
    }

    public function register(): void
    {
        $this->app->bind('remita', function ($app) {
            return new Remita();
        });

        $this->mergeConfigFrom(__DIR__ . '/../../config/remita.php', 'remita');
    }
}
