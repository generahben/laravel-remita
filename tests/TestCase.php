<?php

declare(strict_types=1);

namespace Generahben\Remita\Test;


use Generahben\Remita\Facades\Remita;
use Generahben\Remita\Providers\RemitaServiceProvider;
use Illuminate\Foundation\Application;

/**
 * Class TestCase
 *
 * @author (c) Generah Ben <generahben@gmail.com>
 * @since 9/25/2022
 *
 */
class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Load package service provider
     * @param  Application $app
     */
    protected function getPackageProviders($app): array
    {
        return [RemitaServiceProvider::class];
    }

    /**
     * Load package alias
     * @param  Application $app
     * @return array
     */
    protected function getPackageAliases($app): array
    {
        return [
            'Remita' => Remita::class,
        ];
    }
}