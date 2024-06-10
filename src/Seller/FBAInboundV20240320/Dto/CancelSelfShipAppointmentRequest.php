<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class CancelSelfShipAppointmentRequest extends Dto
{
    /**
     * @param  ?string  $reasonComment  Reason for cancelling or rescheduling a self-ship appointment.
     */
    public function __construct(
        public readonly ?string $reasonComment = null,
    ) {
    }
}
