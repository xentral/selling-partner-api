<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Price extends BaseDto
{
    /**
     * @param  ?float  $amount The amount.
     * @param  ?string  $currencyCode The currency code of the amount.
     */
    public function __construct(
        public readonly ?float $amount = null,
        public readonly ?string $currencyCode = null,
    ) {
    }
}
