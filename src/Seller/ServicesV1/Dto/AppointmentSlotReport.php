<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AppointmentSlotReport extends BaseDto
{
    protected static array $complexArrayTypes = ['appointmentSlots' => [AppointmentSlot::class]];

    /**
     * @param  ?string  $schedulingType Defines the type of slots.
     * @param  ?string  $startTime Start Time from which the appointment slots are generated in ISO 8601 format.
     * @param  ?string  $endTime End Time up to which the appointment slots are generated in ISO 8601 format.
     * @param  AppointmentSlot[]  $appointmentSlots A list of time windows along with associated capacity in which the service can be performed.
     */
    public function __construct(
        public readonly ?string $schedulingType = null,
        public readonly ?string $startTime = null,
        public readonly ?string $endTime = null,
        public readonly ?array $appointmentSlots = null,
    ) {
    }
}
