<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\CreateInboundShipmentPlanResult;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\Error;

final class CreateInboundShipmentPlanResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?CreateInboundShipmentPlanResult  $payload
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?CreateInboundShipmentPlanResult $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
