<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\DataKioskV20231115\Responses;

use SellingPartnerApi\Response;

final class CreateQueryResponse extends Response
{
    /**
     * @param  string  $queryId  The identifier for the query. This identifier is unique only in combination with a selling partner account ID.
     */
    public function __construct(
        public readonly string $queryId,
    ) {
    }
}
