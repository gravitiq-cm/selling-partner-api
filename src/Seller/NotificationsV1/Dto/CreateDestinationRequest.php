<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use SellingPartnerApi\Dto;

final class CreateDestinationRequest extends Dto
{
    /**
     * @param  DestinationResourceSpecification  $resourceSpecification  The information required to create a destination resource. Applications should use one resource type (sqs or eventBridge) per destination.
     * @param  string  $name  A developer-defined name to help identify this destination.
     */
    public function __construct(
        public readonly DestinationResourceSpecification $resourceSpecification,
        public readonly string $name,
    ) {
    }
}
