<?php

/*
 *
 * @author (c) Generah Ben <generahben@gmail.com>
 *
 * This file is part of the Laravel Remita Package
 *
 * For the full copyright and license information, please view the LICENSE
 * file distributed with this source code.
 */

return [

    'base_uri' => env('REMITA_BASE_URI') ?? 'https://remitademo.net/remita/exapp/api/v1/send/api/echannelsvc/',

    'consumer_key' => env('REMITA_CONSUMER_KEY') ?? 2547916,

    'api_key' => env('REMITA_API_KEY') ?? 1946,

    'merchant_id' => env('REMITA_MERCHANT_ID') ?? 2547916

];
