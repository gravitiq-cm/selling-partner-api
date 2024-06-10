<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class AplusResponse extends Dto
{
    protected static array $complexArrayTypes = ['warnings' => [Error::class]];

    /**
     * @param  Error[]|null  $warnings  A set of messages to the user, such as warnings or comments.
     */
    public function __construct(
        public readonly ?array $warnings = null,
    ) {
    }
}
