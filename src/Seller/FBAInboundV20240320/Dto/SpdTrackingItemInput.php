<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class SpdTrackingItemInput extends Dto
{
    /**
     * @param  string  $boxId  The ID provided by Amazon that identifies a given box. This ID is comprised of the external shipment ID (which
     *                         is generated after transportation has been confirmed) and the index of the box.
     * @param  string  $trackingId  The tracking Id associated with each box in a non-Amazon partnered Small Parcel Delivery (SPD) shipment. The seller must provide this information.
     */
    public function __construct(
        public readonly string $boxId,
        public readonly string $trackingId,
    ) {
    }
}