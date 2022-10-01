<?php

declare(strict_types=1);

namespace Generahben\Remita\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * Class Remita
 *
 * This file is part of Laravel Remita Package
 *
 * For the full copyright and license information, please view the LICENSE
 * file distributed with this source code.
 *
 * @author (c) Generah Ben <generahben@gmail.com>
 * @since 9/18/2022
 *
 * @method static array generateRRR(array $body = [])
 * @method static array getTransactionStatusByRRR(string $rrr);
 * @method static array getTransactionStatusByOrderId(string $orderId);
 *
 * @see \Generahben\Remita\Remita
 */
class Remita extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'remita';
    }
}