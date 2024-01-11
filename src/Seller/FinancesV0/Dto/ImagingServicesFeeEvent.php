<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ImagingServicesFeeEvent extends BaseDto
{
    protected static array $complexArrayTypes = ['feeList' => [FeeComponent::class]];

    /**
     * @param  ?string  $imagingRequestBillingItemId The identifier for the imaging services request.
     * @param  ?string  $asin The Amazon Standard Identification Number (ASIN) of the item for which the imaging service was requested.
     * @param  ?string  $postedDate
     * @param  FeeComponent[]  $feeList A list of fee component information.
     */
    public function __construct(
        public readonly ?string $imagingRequestBillingItemId = null,
        public readonly ?string $asin = null,
        public readonly ?string $postedDate = null,
        public readonly ?array $feeList = null,
    ) {
    }
}
