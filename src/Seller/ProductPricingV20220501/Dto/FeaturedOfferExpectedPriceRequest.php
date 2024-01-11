<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeaturedOfferExpectedPriceRequest extends BaseDto
{
    /**
     * @param  string  $uri The URI associated with an individual request within a batch. For `FeaturedOfferExpectedPrice`, this should be `/products/pricing/2022-05-01/offer/featuredOfferExpectedPrice`.
     * @param  string  $method The HTTP method associated with an individual request within a batch.
     * @param  string  $marketplaceId A marketplace identifier. Specifies the marketplace for which data is returned.
     * @param  string  $sku The seller SKU of the item.
     * @param  ?array[]  $body Additional HTTP body information associated with an individual request within a batch.
     * @param  ?string[]  $headers A mapping of additional HTTP headers to send/receive for an individual request within a batch.
     */
    public function __construct(
        public readonly string $uri,
        public readonly string $method,
        public readonly string $marketplaceId,
        public readonly string $sku,
        public readonly ?array $body = null,
        public readonly ?array $headers = null,
    ) {
    }
}
