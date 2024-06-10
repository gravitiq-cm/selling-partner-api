<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Dto;

use SellingPartnerApi\Dto;

final class Link extends Dto
{
    /**
     * @param  string  $resource  URI resource for the link.
     * @param  string  $verb  HTTP method for the link operation.
     */
    public function __construct(
        public readonly string $resource,
        public readonly string $verb,
    ) {
    }
}
