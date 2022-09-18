<?php

declare(strict_types=1);

namespace Generahben\Remita\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * Class Remita
 *
 * This file is part of Laravel Remita Package
 *
 * @author (c) Generah Ben <generahben@gmail.com>
 * @since 9/18/2022
 *
 * For the full copyright and license information, please view the LICENSE
 * file distributed with this source code.
 */
class Remita extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'remita';
    }
}