<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetAdditionalSellerInputsResult extends BaseDto
{
    protected static array $complexArrayTypes = [
        'shipmentLevelFields' => [AdditionalInputs::class],
        'itemLevelFieldsList' => [ItemLevelFields::class],
    ];

    /**
     * @param  AdditionalInputs[]  $shipmentLevelFields A list of additional inputs.
     * @param  ItemLevelFields[]  $itemLevelFieldsList A list of item level fields.
     */
    public function __construct(
        public readonly ?array $shipmentLevelFields = null,
        public readonly ?array $itemLevelFieldsList = null,
    ) {
    }
}
