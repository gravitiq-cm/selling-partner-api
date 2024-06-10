<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV0\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ProductPricingV0\Dto\ItemOffersResponse;

final class GetItemOffersBatchResponse extends Response
{
    protected static array $complexArrayTypes = ['responses' => [ItemOffersResponse::class]];

    /**
     * @param  ItemOffersResponse[]|null  $responses  A list of `getItemOffers` batched responses.
     */
    public function __construct(
        public readonly ?array $responses = null,
    ) {
    }
}
