<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use SellingPartnerApi\Dto;

final class UpdatePackageDetails extends Dto
{
    /**
     * @param  ScheduledPackageId  $scheduledPackageId  Identifies the scheduled package to be updated.
     * @param  TimeSlot  $packageTimeSlot  A time window to hand over an Easy Ship package to Amazon Logistics.
     */
    public function __construct(
        public readonly ScheduledPackageId $scheduledPackageId,
        public readonly TimeSlot $packageTimeSlot,
    ) {
    }
}
