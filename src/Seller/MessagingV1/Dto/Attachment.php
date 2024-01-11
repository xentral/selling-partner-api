<?php

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Attachment extends BaseDto
{
    /**
     * @param  string  $uploadDestinationId The identifier of the upload destination. Get this value by calling the [createUploadDestinationForResource](doc:uploads-api-reference#post-uploads2020-11-01uploaddestinationsresource) operation of the Uploads API.
     * @param  string  $fileName The name of the file, including the extension. This is the file name that will appear in the message. This does not need to match the file name of the file that you uploaded.
     */
    public function __construct(
        public readonly string $uploadDestinationId,
        public readonly string $fileName,
    ) {
    }
}
