<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Dto;

use SellingPartnerApi\Dto;

final class Refinements extends Dto
{
    protected static array $complexArrayTypes = [
        'brands' => [BrandRefinement::class],
        'classifications' => [ClassificationRefinement::class],
    ];

    /**
     * @param  BrandRefinement[]  $brands  Brand search refinements.
     * @param  ClassificationRefinement[]  $classifications  Classification search refinements.
     */
    public function __construct(
        public readonly array $brands,
        public readonly array $classifications,
    ) {
    }
}
