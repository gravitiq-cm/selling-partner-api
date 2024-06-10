<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class RequestedValueAddedService extends Dto
{
    /**
     * @param  string  $id  The identifier of the selected value-added service. Must be among those returned in the response to the getRates operation.
     */
    public function __construct(
        public readonly string $id,
    ) {
    }
}
