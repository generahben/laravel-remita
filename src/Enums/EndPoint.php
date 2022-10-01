<?php

declare(strict_types=1);

namespace Generahben\Remita\Enums;


/**
 * enum EndPoint
 *
 * @author (c) Generah Ben <generahben@gmail.com>
 * @since 10/1/2022
 *
 */
enum EndPoint: string
{
    case GENERATE_INVOICE_STANDARD = 'merchant/api/paymentinit';
    case TRANSACTION_STATUS_BY_RRR = '%u/%s/%s/status.reg'; //'{consumerKey}/{rrr}/{apiHash}/status.reg'
    case TRANSACTION_STATUS_BY_ORDER_ID = '%u/%s/%s/orderstatus.reg'; //'{consumerKey}/{orderId}/{apiHash}/orderstatus.reg'
}