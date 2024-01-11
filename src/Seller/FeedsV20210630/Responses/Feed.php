<?php

namespace SellingPartnerApi\Seller\FeedsV20210630\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class Feed extends BaseResponse
{
    /**
     * @param  string  $feedId The identifier for the feed. This identifier is unique only in combination with a seller ID.
     * @param  string  $feedType The feed type.
     * @param  string  $createdTime The date and time when the feed was created, in ISO 8601 date time format.
     * @param  string  $processingStatus The processing status of the feed.
     * @param  ?string[]  $marketplaceIds A list of identifiers for the marketplaces that the feed is applied to.
     * @param  ?string  $processingStartTime The date and time when feed processing started, in ISO 8601 date time format.
     * @param  ?string  $processingEndTime The date and time when feed processing completed, in ISO 8601 date time format.
     * @param  ?string  $resultFeedDocumentId The identifier for the feed document. This identifier is unique only in combination with a seller ID.
     */
    public function __construct(
        public readonly string $feedId,
        public readonly string $feedType,
        public readonly string $createdTime,
        public readonly string $processingStatus,
        public readonly ?array $marketplaceIds = null,
        public readonly ?string $processingStartTime = null,
        public readonly ?string $processingEndTime = null,
        public readonly ?string $resultFeedDocumentId = null,
    ) {
    }
}
