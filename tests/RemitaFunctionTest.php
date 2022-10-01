<?php

declare(strict_types=1);

namespace Generahben\Remita\Test;


use Generahben\Remita\Facades\Remita;

/**
 * Class RemitaFunctionTest
 *
 * @author (c) Generah Ben <generahben@gmail.com>
 * @since 9/25/2022
 *
 */
class RemitaFunctionTest extends TestCase
{
    private const RRR_CREATED_STATUS = '025';

    private array $requestBody = [];

    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutExceptionHandling();
    }

    public function test_generate_rrr_returns_rrr(): void
    {
        $this->setGenerateInvoiceRequestBody();
        $this->requestBody['orderId'] = 'NPT-'.time();
        $res = Remita::generateRRR($this->requestBody);

        $this->assertArrayHasKey('RRR', $res);
        $this->assertEquals(self::RRR_CREATED_STATUS, $res['statuscode']);

    }

    public function test_duplicate_rrr_found(): void
    {
        //Previous RRR
        //220009025566
        $this->setGenerateInvoiceRequestBody();
        $this->requestBody['orderId'] = 'NPT-6789';
        $res = Remita::generateRRR($this->requestBody);

        $this->assertIsArray($res);
        $this->assertArrayHasKey('statusMessage', $res);
    }

    public function test_get_transaction_status(): void
    {
        $res = Remita::getTransactionStatusByRRR("220009025566");
        $this->assertEquals('220009025566', $res['RRR']);
        $this->assertArrayHasKey('message', $res);
    }

    private function setGenerateInvoiceRequestBody(): void
    {
        $this->requestBody = [
            'serviceTypeId' => 4430731,
            'amount' => 40000,
            'payerName' => 'Generah Ben',
            'payerEmail' => 'generahben@gmail.com',
            'payerPhone' => '08121442009',
            'description' => 'Test payment description'
        ];
    }
}