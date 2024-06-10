<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class IntegerWithUnits extends Dto
{
    /**
     * @param  int  $value  The dimension value.
     * @param  string  $units  The unit of measurement.
     */
    public function __construct(
        public readonly int $value,
        public readonly string $units,
    ) {
    }
}
