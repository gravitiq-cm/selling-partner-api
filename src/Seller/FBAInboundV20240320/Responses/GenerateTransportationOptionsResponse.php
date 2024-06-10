<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use SellingPartnerApi\Response;

final class GenerateTransportationOptionsResponse extends Response
{
    /**
     * @param  string  $operationId  UUID for the given operation.
     */
    public function __construct(
        public readonly string $operationId,
    ) {
    }
}
